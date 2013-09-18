<?php if (!defined('FLUX_ROOT')) exit; ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html>
<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width" />
		
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
		
        <?php
        
        $this->themeAssets->add_css('foundation.css');
        $this->themeAssets->add_css('style.css');
        $this->themeAssets->add_css('font-awesome.min.css');
        $this->themeAssets->add_css('flux/unitip.css');
        
        if (Flux::config('EnableReCaptcha')) {
            $this->themeAssets->add_css('flux/flux/recaptcha.css');
        }
        
        echo $this->themeAssets->compile_css();
        ?>
	</head>
<body>

<!-- this is hidden -->
<div id="fluxModal" class="reveal-modal">
	<div id="modal-content"></div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div class="row" id="fluxcp">
    <div class="large-12 columns">

	<!-- Navigation -->
	<div class="row">
	<div class="large-12 columns">
	<nav class="top-bar">
	<ul class="title-area">
	  <!-- Title Area -->
	  <li class="name">
		<h1>
		  <a href="<?php echo $this->url('main'); ?>">
			<?php echo Flux::Config('SiteTitle') ?>
		  </a>
		</h1>
	  </li>
	  <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
	</ul>

	<section class="top-bar-section">
	  <!-- Right Nav Section -->
	  <?php include('main/mainmenu.php'); ?>
	</section>
	</nav>
	<!-- End Top Bar -->
	</div>
	</div>
	<!-- End Navigation -->
	
	<div class="row">
		<div class="large-12 columns">
			<div id="header"></div>
		</div>
	</div>
	
	<div class="row">
		<div id="show-login_box"><a href="#show-login_box" ><i class="icon-chevron-down"></i> Show Panel</a></div>
		<!-- Side Bar -->
        <div class="large-4 small-12 columns" id="login_box">
          <div class="login_box-content">
			<a href="#hide-login_box" id="hide-login_box"><i class="icon-chevron-up"></i> Hide Panel</a>
			<span id="server_time"></span>
            <h3><i class="icon-user"></i> Member Panel</h3>
            <?php include('main/loginbox.php') ?>
			</div>
		<!-- End Side Bar -->

        <div class="large-8 columns" id="main_content-container">
		  <!-- Main Content -->
          <div id="main_content">
          	<!-- Content By -->
          	  <div class="large-12 columns" id="ajax_loadPage">