<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('AccountCreateHeading')) ?></h2>
<p><?php printf(htmlspecialchars(Flux::message('AccountCreateInfo')), '<a href="'.$this->url('service', 'tos').'">'.Flux::message('AccountCreateTerms').'</a>') ?></p>
<?php if (Flux::config('RequireEmailConfirm')): ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong> <?php echo Flux::message('EmailMustValid') ?>.
</div>
<?php endif ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong> <?php echo sprintf("Your password must be between %d and %d characters.", Flux::config('MinPasswordLength'), Flux::config('MaxPasswordLength')) ?>
</div>
<?php if (Flux::config('PasswordMinUpper') > 0): ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong> <?php echo sprintf(Flux::message('PasswordNeedUpper'), Flux::config('PasswordMinUpper')) ?>
</div>
<?php endif ?>
<?php if (Flux::config('PasswordMinLower') > 0): ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong> <?php echo sprintf(Flux::message('PasswordNeedLower'), Flux::config('PasswordMinLower')) ?>
</div>
<?php endif ?>
<?php if (Flux::config('PasswordMinNumber') > 0): ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong><?php echo sprintf(Flux::message('PasswordNeedNumber'), Flux::config('PasswordMinNumber')) ?>
</div>
<?php endif ?>
<?php if (Flux::config('PasswordMinSymbol') > 0): ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong> <?php echo sprintf(Flux::message('PasswordNeedSymbol'), Flux::config('PasswordMinSymbol')) ?>
</div>
<?php endif ?>
<?php if (!Flux::config('AllowUserInPassword')): ?>
<div data-alert class="alert-box ">
	<strong>Note:</strong> <?php echo Flux::message('PasswordContainsUser') ?>
</div>
<?php endif ?>
<!-- Error Message -->
<?php if (isset($errorMessage)): ?>
<div data-alert class="alert-box alert"><?php echo htmlspecialchars($errorMessage) ?><a href="#" class="close">&times;</a></div>
<?php endif ?>
<form action="<?php echo $this->url ?>" method="post" class="small-12 small-centered columns" id="createAccount">
	<?php if (count($serverNames) === 1): ?>
	<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
	<?php endif ?>
	<table class="generic-form-table">
		<?php if (count($serverNames) > 1): ?>
		<tr>
			<th><label for="register_server"><?php echo htmlspecialchars(Flux::message('AccountServerLabel')) ?></label></th>
			<td>
				<select name="server" id="register_server"<?php if (count($serverNames) === 1) echo ' disabled="disabled"' ?>>
				<?php foreach ($serverNames as $serverName): ?>
					<option value="<?php echo htmlspecialchars($serverName) ?>"<?php if ($params->get('server') == $serverName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($serverName) ?></option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
		<?php endif ?>
		
		<tr>
			<th><label for="register_username"><?php echo htmlspecialchars(Flux::message('AccountUsernameLabel')) ?></label></th>
			<td><input type="text" name="username" id="register_username" value="<?php echo htmlspecialchars($params->get('username')) ?>" /></td>
		</tr>
		
		<tr>
			<th><label for="register_password"><?php echo htmlspecialchars(Flux::message('AccountPasswordLabel')) ?></label></th>
			<td><input type="password" name="password" id="register_password" /></td>
		</tr>
		
		<tr>
			<th><label for="register_confirm_password"><?php echo htmlspecialchars(Flux::message('AccountPassConfirmLabel')) ?></label></th>
			<td><input type="password" name="confirm_password" id="register_confirm_password" /></td>
		</tr>
		
		<tr>
			<th><label for="register_email_address"><?php echo htmlspecialchars(Flux::message('AccountEmailLabel')) ?></label></th>
			<td><input type="text" name="email_address" id="register_email_address" value="<?php echo htmlspecialchars($params->get('email_address')) ?>" /></td>
		</tr>
		
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('AccountGenderLabel')) ?></label></th>
			<td>
					<div class="large-4 columns">
						<label><input type="radio" name="gender" id="register_gender_m" value="M"<?php if ($params->get('gender') === 'M') echo ' checked="checked"' ?> /> <?php echo $this->genderText('M') ?></label>
					</div>
					<div class="large-4 columns">
						<label><input type="radio" name="gender" id="register_gender_f" value="F"<?php if ($params->get('gender') === 'F') echo ' checked="checked"' ?> /> <?php echo $this->genderText('F') ?></label>
					</div>
					<div class="large-12 columns">
						<p> <?php echo htmlspecialchars(Flux::message('AccountCreateGenderInfo')) ?></p>
					</div>
			</td>
		</tr>
		
		<tr>
			<th><label><?php echo htmlspecialchars(Flux::message('AccountBirthdateLabel')) ?></label></th>
			<td><?php echo $this->dateField('birthdate',null,0) ?></td>
		</tr>
		
		<?php if (Flux::config('UseCaptcha')): ?>
		<tr>
			<?php if (Flux::config('EnableReCaptcha')): ?>
			<th><label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label></th>
			<td><?php echo $recaptcha ?></td>
			<?php else: ?>
			<th><label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label></th>
			<td>
				<div class="row">
					<div class="large-4 columns">
						<div class="security-code">
							<img src="<?php echo $this->url('captcha') ?>" />
						</div>
					</div>
					
					<div class="large-8 columns">
						<input type="text" name="security_code" id="register_security_code" />
						<div style="font-size: smaller;" class="action">
							<strong><a href="javascript:refreshSecurityCode('.security-code img')"><?php echo htmlspecialchars(Flux::message('RefreshSecurityCode')) ?></a></strong>
						</div>
					</div>
				</div>
			</td>
			<?php endif ?>
		</tr>
		<?php endif ?>
		
		<tr>
			<td></td>
			<td>
				<div style="margin-bottom: 5px">
					<?php printf(htmlspecialchars(Flux::message('AccountCreateInfo2')), '<a href="#" onclick="showModal(\''.$this->url('service','tos', array('isAjax' => '1')).'\');">'.Flux::message('AccountCreateTerms').'</a>') ?>
				</div>
				<div class="large-6 large-centered columns">
					<button type="submit"><strong><?php echo htmlspecialchars(Flux::message('AccountCreateButton')) ?></strong></button>
				</div>
			</td>
		</tr>
	</table>
</form>