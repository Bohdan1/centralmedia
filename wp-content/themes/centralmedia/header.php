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
	<style>
		/*Iphone 5*/
		@media (device-height: 568px) and (-webkit-min-device-pixel-ratio: 2) {

			.iphone-hide{
				display: none;
			}
			.social-user {
				right: 10px;
				position: absolute;
			}
			.social-menu{
				position: absolute;
				top:5px;
				left: 140px;
			}
			.iphone-menu-font{
				font-size: 52px;
			}

		}
		@media screen and (max-width: 782px){

			html {
				margin-top: 0 !important;
			}
		}
		/* mobile */
		@media screen and (max-width: 668px) {
			#menu li{
			    text-transform: uppercase;
			    display: inline;
			    list-style:none;
			    margin: 5px 10px;
			    padding-left: 0px;
			    padding-right: 5px;
			}
			#wpadminbar{
				display: none;
				margin: 0 !important;
			}
			.side-nav .userView .circle {
				height: 64px;
				width: 64px;
				margin: 0 auto;
			}

			.modal-close{
				position: relative;
			}
			.header-logo{
				width: 100%;
			}
			.modal {
				margin-top: 50px;
				width: 100%;
			}
			.main-sign{
				font-size: 25px;
			}
			.additional-sign{
				font-size: 18px;
				display: none;
			}

			.login-form{
				width: 90%;
				margin: 0 auto;
			}
			.modal-close {
				position: relative;
				float: right;
				margin-top: -70px;
				margin-right: -20px;
			}
			.carousel {
				height: 219px !important;
			}
			.menu-font{
				font-size: 35px;
			}
		}	
	</style>
</head>

<body>
	<!--SideNav Structure-->
	<ul id="slide-out" class="side-nav">
		<?php
			if (is_user_logged_in() ) {
		?>
				<li>
					<div class="userView black-text center">
						<div class="if-not-login">
							<div class="center">
								<?php global $current_user;  get_currentuserinfo(); echo get_avatar( $current_user->user_email, '96' );  ?>
							</div>
							<?php
								if ($current_user->user_firstname) {
									echo '
										<a href="#!name">
											<span class="black-text name">' .
												$current_user->user_firstname . ' ' . $current_user->user_lastname .'
											</span>
										</a>
									';
								}
								if ($current_user->user_email) {
									echo '
										<a href="#!email">
											<span class="black-text email">' .
												$current_user->user_email . '
											</span>
										</a>';
								}

								global $user_ID;
								if( $user_ID ) :
									if( current_user_can('level_2') or current_user_can('level_10') ) : ?>
									<div> <a href="<?php bloginfo('url') ?>/wp-admin/index.php">Адміністрування</a> </div>
							<?php
									else :
									endif;
								endif;
							?>
							<a href="<?php bloginfo('url') ?>/wp-admin/profile.php" title="изменить">Редагувати</a>
						</div>
					</div>
				</li>
		<?php
			}
		?>
		
		<li><a href="<?php echo get_home_url(); ?>">Головна</a></li>
		<li><a href="<?php echo get_post_type_archive_link('news'); ?>">Новини</a></li>
		<li><a href="<?php echo get_post_type_archive_link('articles'); ?>">Статті</a></li>
		<li><a href="<?php echo get_post_type_archive_link('video'); ?>">Відео</a></li>
		<li><a href="<?php echo get_post_type_archive_link('blogs'); ?>">Блоги</a></li>
	</ul>
	<!-- end SideNav Structure-->
	<div id="menu" class="row ">
		<div class="col l1 s3">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url') ?>/img/logo/logo-central-media1.jpeg" class="header-logo">
			</a>
		</div>
		<div class="col l5 ">
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a class="menu-list hide-on-med-and-down" href="<?php echo get_post_type_archive_link('news'); ?>">НОВИНИ</a></li>
					<li><a class="menu-list hide-on-med-and-down" href="<?php echo get_post_type_archive_link('articles'); ?>">СТАТТІ</a></li>
					<li><a class="menu-list hide-on-med-and-down" href="<?php echo get_post_type_archive_link('blogs'); ?>">БЛОГИ</a></li>
					<li><a class="menu-list hide-on-med-and-down" href="<?php echo get_post_type_archive_link('video'); ?>">ВІДЕО</a></li>
				</ul>
			</div>
		</div>
		<div class="col l6 s9">
			<ul class="right">
				<li class="social-menu"><a href="#" data-activates="slide-out" class="button-collapse"><i class=" hide-on-large-only material-icons iphone-menu-font menu-font">menu</i></a></li>
				<li class="hide-on-med-and-down">
					<?php get_search_form(); ?>
				</li>
				<li class="iphone-hide"><a href="https://www.facebook.com/"><img class="social iphone-hide " src="<?php bloginfo('template_url') ?>/img/social/fb.png"></a></li> 
				<li class="iphone-hide"><a href="https://www.youtube.com/"><img class="social iphone-hide" src="<?php bloginfo('template_url') ?>/img/social/yb.png"></a></li>
				<li class="iphone-hide"><a href="https://twitter.com/"><img class="social iphone-hide" src="<?php bloginfo('template_url') ?>/img/social/tw.png"></a></li>
				<li class=""><a href="#modal1"><img class="social social-user" src="<?php bloginfo('template_url') ?>/img/social/user.png"></a></li>
			</ul>
		</div>
	</div>
	<div style="height: 58px;"></div>
	<!-- Modal Structure -->
	<?php author_log(); ?>