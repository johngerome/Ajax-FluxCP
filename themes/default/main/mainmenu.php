<?php
if (!defined('FLUX_ROOT')) exit;
//$adminMenuItems = $this->getAdminMenuItems();
$menuItems = $this->getMenuItems();
?>

<?php if (!empty($menuItems)): ?>
<ul class="right">		
<?php 	foreach ($menuItems as $menuCategory => $menus): ?>
		<!-- category -->
		<li class="divider"></li>
		<li class="has-dropdown">
<?php 	if (!empty($menus)): ?>
			<a href="#"><?php echo htmlspecialchars($menuCategory) ?></a>
			<ul class="dropdown">
<?php 		foreach ($menus as $menuItem):  ?>
				<li>
				<a href="<?php
				if ($menuItem['module'] == 'account' && $menuItem['action'] == 'logout'){
					echo htmlspecialchars($menuItem['url']).'" ';
				}else{
					echo '#" onclick="load_page(\'' .htmlspecialchars($menuItem['url'].'?&isAjax=1').'\');" '; 
				}
				?>>
					<span><?php echo htmlspecialchars($menuItem['name']) ?></span>
				</a>
				</li>
<?php 		endforeach; ?>
			</ul>
<?php 	endif; ?>
<?php 	endforeach; ?>
</ul>
<?php endif; ?>