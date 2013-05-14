<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php  $serverNames = $this->getServerNames();?>

<script>
	
</script>

<?php if (!$session->isLoggedIn()): ?>
	
	<div id="login_box_login_error" style="display: none;"><!-- intentionally blank --></div>

	<?php if (count($serverNames) === 1): ?>
	<input type="hidden" name="server" id="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>" />
	<?php endif ?>

	<input type="text" name="username" id="username" placeholder="<?php echo htmlspecialchars(Flux::message('AccountUsernameLabel')) ?>"/>
	<input type="password" name="password" id="password" placeholder="<?php echo htmlspecialchars(Flux::message('AccountPasswordLabel')) ?>"/>
	<button id="btn_login" onclick="doLogin(this,'<?php echo $this->url('account', 'login', array('isAjax' => '1', 'return_url' => $params->get('return_url'))) ?>', 'login_box');" class="small button"/><?php echo htmlspecialchars(Flux::message('LoginButton')) ?></button>

	<a href="#">forgot password?</a>
</div><!--// -->
<a href="#" onclick="load_page('<?php echo $this->url('account','create',array('isAjax' => '1')) ?>')" class="large button register">Register Now!</a>
<?php else: ?>
Welcome <?php echo $session->account->userid; ?>
</div><!--// -->
<?php endif; ?>