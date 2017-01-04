<!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>

<body>
	<div id="menu" class="row ">
		<div class="col l1 ">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url') ?>/img/logo/logo-central-media1.jpeg" class="header-logo">
			</a>
		</div>
		<div class="col l5 ">
		    <div class="nav-wrapper">
				<ul id="nav-mobile" class="left hide-on-med-and-down">
				    <li><a class="menu-list" href="<?php echo get_home_url(); ?>/video">ВІДЕО</a></li>
				    <li><a class="menu-list" href="<?php echo get_home_url(); ?>/blogs">БЛОГИ</a></li>
				    <li><a class="menu-list" href="<?php echo get_home_url(); ?>/articles">СТАТТІ</a></li>
		  	 		<li><a class="menu-list" href="<?php echo get_home_url(); ?>/news">НОВИНИ</a></li>
		  		</ul>
			</div>
		</div>
		<div class="col l6">
			<nav class="hide-on-med-and-down">
				<div class="nav-wrapper">
					<form action="">
						<div class="input-field">
							<input id="search" placeholder="Пошук..." type="search" required name="s">
							<label for="search"><i class="material-icons">search</i></label>
						</div>
					</form>
				</div>
			</nav>
			<ul >
				<li><a href="#"><img class="social" src="<?php bloginfo('template_url') ?>/img/social/tw.png"></a></li>
				<li><a href="#"><img class="social" src="<?php bloginfo('template_url') ?>/img/social/yb.png"></a></li>
				<li><a href="#"><img class="social" src="<?php bloginfo('template_url') ?>/img/social/fb.png"></a></li>  
			</ul>
		</div>
	</div>

	<div style="height: 58px;"></div>
