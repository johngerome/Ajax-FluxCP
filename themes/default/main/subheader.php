<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
	<p class="notice"><i class="icon-warning-sign"></i> Please change your <strong>ServerAddress</strong> directive in your application config to your server's real address (e.g., myserver.com).</p>
<?php endif ?>

<!-- Messages -->
<?php if ($message=$session->getMessage()): ?>
	<p class="message"><i class="icon-info-sign" ></i> <?php echo htmlspecialchars($message) ?></p>
<?php endif ?>
			
<!-- Sub menu -->
<?php include 'submenu.php' ?>

<!-- Page menu -->
<?php include 'pagemenu.php' ?>

<!-- Credit balance -->
<?php if (in_array($params->get('module'), array('donate', 'purchase'))) include 'balance.php' ?>
