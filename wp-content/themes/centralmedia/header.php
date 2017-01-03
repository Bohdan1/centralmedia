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
	<?php
		/*
		if (is_admin_bar_showing()) {
		    echo '<div style="height: 30px;"></div>';
		}
		*/
	?>

	<div id="menu" class="row ">
		<div class="col l1 ">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_url') ?>/img/logo/logo-central-media1.jpeg" class="header-logo">
			</a>
		</div>
		<div class="col l5 ">
		<div class="nav-wrapper">
			<ul id="nav-mobile" class="left hide-on-med-and-down">
			    <li><a class="menu-list" href="collapsible.html">ВІДЕО</a></li>
			    <li><a class="menu-list" href="collapsible.html">БЛОГИ</a></li>
			    <li><a class="menu-list" href="badges.html">СТАТТІ</a></li>
      	 		<li><a class="menu-list" href="sass.html">НОВИНИ</a></li>
      </ul>
      </div>
		</div>
		<div class="col l6">
			<nav class="hide-on-med-and-down">
				<div class="nav-wrapper">
					<form>
						<div class="input-field">
							<input id="search" placeholder="Пошук..." type="search" required>
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
