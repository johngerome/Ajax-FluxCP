<?php
if (!defined('FLUX_ROOT')) exit;

if (Flux::config('UseLoginCaptcha') && Flux::config('EnableReCaptcha')) {
	require_once 'recaptcha/recaptchalib.php';
	$recaptcha = recaptcha_get_html(Flux::config('ReCaptchaPublicKey'));
}

$title = Flux::message('LoginTitle');
$loginLogTable = Flux::config('FluxTables.LoginLogTable');


if (count($_POST)) {
	$success  = TRUE;
	$errors   = array();
	$errorMessage = NULL;
	$server   = $params->get('server');
	$username = $params->get('username');
	$password = $params->get('password');
	$code     = $params->get('security_code');
	$returnURL = $params->get('return_url');
	
	try {
		$session->login($server, $username, $password, $code);
		
		if ($session->loginAthenaGroup->loginServer->config->getUseMD5()) {
			$password = Flux::hashPassword($password);
		}
		
		$sql  = "INSERT INTO {$session->loginAthenaGroup->loginDatabase}.$loginLogTable ";
		$sql .= "(account_id, username, password, ip, error_code, login_date) ";
		$sql .= "VALUES (?, ?, ?, ?, ?, NOW())";
		$sth  = $session->loginAthenaGroup->connection->getStatement($sql);
		$sth->execute(array($session->account->account_id, $username, $password, $_SERVER['REMOTE_ADDR'], null));
		
		/*if ($returnURL) {
			$this->redirect($returnURL);
		}
		else {
			$this->redirect();
		}*/

	}
	catch (Flux_LoginError $e) {
		if ($username && $password && $e->getCode() != Flux_LoginError::INVALID_SERVER) {
			$loginAthenaGroup = Flux::getServerGroupByName($server);

			$sql = "SELECT account_id FROM {$loginAthenaGroup->loginDatabase}.login WHERE ";
			
			if (!$loginAthenaGroup->loginServer->config->getNoCase()) {
				$sql .= "CAST(userid AS BINARY) ";
			} else {
				$sql .= "userid ";
			}
			
			$sql .= "= ? LIMIT 1";
			$sth = $loginAthenaGroup->connection->getStatement($sql);
			$sth->execute(array($username));
			$row = $sth->fetch();

			if ($row) {
				$accountID = $row->account_id;
				
				if ($loginAthenaGroup->loginServer->config->getUseMD5()) {
					$password = Flux::hashPassword($password);
				}

				$sql  = "INSERT INTO {$loginAthenaGroup->loginDatabase}.$loginLogTable ";
				$sql .= "(account_id, username, password, ip, error_code, login_date) ";
				$sql .= "VALUES (?, ?, ?, ?, ?, NOW())";
				$sth  = $loginAthenaGroup->connection->getStatement($sql);
				$sth->execute(array($accountID, $username, $password, $_SERVER['REMOTE_ADDR'], $e->getCode()));
			}
		}
		
		switch ($e->getCode()) {
			case Flux_LoginError::UNEXPECTED:
				$errorMessage = Flux::message('UnexpectedLoginError');
				$success = FALSE;
				break;
			case Flux_LoginError::INVALID_SERVER:
				$errorMessage = Flux::message('InvalidLoginServer');
				$success = FALSE;
				break;
			case Flux_LoginError::INVALID_LOGIN:
				$errorMessage = Flux::message('InvalidLoginCredentials');
				$success = FALSE;
				break;
			case Flux_LoginError::BANNED:
				$errorMessage = Flux::message('TemporarilyBanned');
				$success = FALSE;
				break;
			case Flux_LoginError::PERMABANNED:
				$errorMessage = Flux::message('PermanentlyBanned');
				$success = FALSE;
				break;
			case Flux_LoginError::IPBANNED:
				$errorMessage = Flux::message('IpBanned');
				$success = FALSE;
				break;
			case Flux_LoginError::INVALID_SECURITY_CODE:
				$errorMessage = Flux::message('InvalidSecurityCode');
				$success = FALSE;
				break;
			case Flux_LoginError::PENDING_CONFIRMATION:
				$errorMessage = Flux::message('PendingConfirmation');
				$success = FALSE;
				break;
			default:
				$errorMessage = Flux::message('CriticalLoginError');
				$success = FALSE;
				break;
		}
	}

	$response = array(
		'success' 	=> $success,
		'errors' 	=> $errorMessage,
		'returnUrl'	=> $returnURL,
	);

	echo json_encode($response);
	exit;
}


$serverNames = $this->getServerNames();
?>