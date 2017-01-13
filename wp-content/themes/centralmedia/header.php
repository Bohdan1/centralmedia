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
	
/* mobile */
@media screen and (max-width: 768px) {
    .modal-close{
        position: relative;
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
}	
	</style>
	
</head>

<body>
	<div id="menu" class="row ">
		<div class="col l1 s4 ">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url') ?>/img/logo/logo-central-media1.jpeg" class="header-logo">
			</a>
		</div>
		<div class="col l5 ">
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a class="menu-list" href="<?php echo get_post_type_archive_link('news'); ?>">НОВИНИ</a></li>
					<li><a class="menu-list" href="<?php echo get_post_type_archive_link('articles'); ?>">СТАТТІ</a></li>
					<li><a class="menu-list" href="<?php echo get_post_type_archive_link('blogs'); ?>">БЛОГИ</a></li>
					<li><a class="menu-list" href="<?php echo get_post_type_archive_link('video'); ?>">ВІДЕО</a></li>
				</ul>
			</div>
		</div>
		<div class="col l6 s8">
			<div class="">
				<ul class="right">
					<li class="hide-on-med-and-down">
						<?php get_search_form(); ?>
					</li>
					<li><a href="#"><img class="social " src="<?php bloginfo('template_url') ?>/img/social/fb.png"></a></li> 
					<li><a href="#"><img class="social" src="<?php bloginfo('template_url') ?>/img/social/yb.png"></a></li>
					<li><a href="#"><img class="social" src="<?php bloginfo('template_url') ?>/img/social/tw.png"></a></li>
					<li><a href="#modal1"><img class="social" src="<?php bloginfo('template_url') ?>/img/social/user.png"></a></li>

				</ul>
			</div>
		</div>
	</div>
	<div style="height: 58px;"></div>
	<!-- Modal Structure -->
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4 class="center ">Авторизація</h4>
			<a href="#!" class="modal-action  modal-close  waves-effect waves-red accent-4 btn-flat"><i class="material-icons">&#xE14C;</i></a>
			<form class="login-form center" name="form" action="#" method="post">
				<div id="">
					<input type="text" name="name" id="name" placeholder="Логин" required/>
					<input type="password" name="password" id="password" placeholder="Пароль" required />
					<input class="waves-effect  waves-red accent-4 btn-flat" type="submit" id="submit" name="submit" value="Вхід"/>
					<a href="#!" class="  waves-effect  waves-red btn-flat">Зареєструватися</a>
				</div>
			</form>
			<div class="modal-footer "> </div>
		</div>
	</div>