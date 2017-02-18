<!DOCTYPE html>
<html>
<head>
    <title>
        <?php
            if ( is_home () ) {
                bloginfo('name');
            }
            elseif ( is_category() ) {
                single_cat_title(); echo " - Категорії";
            }
            elseif ( is_single() || is_page() ) {
                echo wp_get_document_title();
            }
            elseif ( is_search() ) {
                echo 'Результати пошуку - '; bloginfo('name');
            }
            elseif ( is_tag() ) {
                echo wp_get_document_title( $sep = '', $display = true );
            }
            elseif ( is_author() ) {
                echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') . ' - '; bloginfo('name');
            }
            else {
                echo wp_get_document_title();
            }
        ?>
    </title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <?php wp_head(); ?>

    <style>
        /*Iphone 5*/
        @media (device-height: 568px) and (-webkit-min-device-pixel-ratio: 2) {

        }
        @media only screen and (min-width: 601px){
            .row .col.m4 {
                width: 33.3333333333% !important;
                margin-left: auto;
                left: auto;
                right: auto;
            }
        }
        /*tablet*/
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .slick-slide, .slider-element img, .slider-bloger-name-main, .slider-bloger-name,.slider-bloger-thema, .blog-element-tag, .slider-bloger-thema-main
            {
                transform: skewX(0deg);
            }
            .button-position-main-video-top-slide {
                margin-top: 50%;
                width: 150%;
                left: 0;
                position: absolute;
            }
            .button-position-popular-video-content-box-main {
                width: 36%;
                position: relative;
                cursor: pointer;
                z-index: 2;
                left: 0;
                margin-left: 33%;
                top: 8%;
            }

            .short-post-title{
                font-size: 20px;
            }
            .box-title {
                padding-bottom: 10px;
                font-size: 15px;
                color: white;
            }
            .social-menu-bottom {
                bottom: -73px;
                position: absolute;
                right: 150px;
                z-index: 55;
            }
            nav ul {
                position: absolute;
                z-index: 99;
                transition: background-color .1s;
                font-size: 1rem;
                display: block;
                margin-left: 400px;
                margin-top: -93px;
                cursor: pointer;
            }
            .previous-blog-name {
                position: relative;
                top: -7px;
                font-size: 25px;
                font-weight: bold;
                left: -2px;
                display: inline-block;
            }
            .title-tag-all-video {
                margin: 5px;
                position: absolute;
                bottom: 200px;
                font-size: 25px;
                color: white;
                padding: 2px;
                left: 15px;
                text-align: left;
                background-color: rgba(255, 0, 0, 0.8);

            }
            .main-news-content-box{
                height: 530px;
            }
            .title-tag{
                font-size: 17px;
                margin-left: -5px;
            }
            .footer-logo {
                width: 25%;
                margin-top: 10px;
                margin-left: 0px;
                float: left; 
                padding-right: 0px;
            }
            .footer-menu {
                text-align: center;
                margin-left: 0px;
                margin-top: 33px;
                font-size: 20px;
            }
            .social-menu-footer {
                text-align: center;
                padding-top: 15px;
                margin-left: 0px; 
            }
            .social-text-footer {
                margin-top: 10px;
                margin-left: 0px; 
                color: white;
                padding-bottom: 20px;
                text-align: center;

            }
            .madeby {
                position: relative;
                font-size: 18px;
                color: white;
                bottom: 0px;
                padding-top: 0px;
                left: 0%;
                text-align: center;
            }
            .footer-about {
                padding-top: 0px;
                color: white;
                text-align: justify;
            }
            .main-article-content-box {
                position: absolute;
                padding-left: 10px;
                padding-right: 10px;
                bottom: 10px;
            }
            .box-title {
                font-size: 18px;
            }
            .box-title-small {
                padding-bottom: 10px;
                color: white;
                font-size: 11px;
            }
            .logo-text{
                position: relative;
                display: inline-block;
                top: -24px;
                left: 0px;
                font-size: 25px;
                text-transform: uppercase;
            }
            .social-menu-top {
                top: 15px;
                right: %;
                z-index: 999;
                position: absolute;
            } 

            .menu-list {
                float: right;
                display: inline-block;
                padding: 10px 10px 10px 20px;
                margin-right: 0px; 
            }
            body{
                background-color: white;
            }

        }
        /* mobile */
        @media screen and (max-width: 668px) {
            .slick-slide, .slider-element img, .slider-bloger-name-main, .slider-bloger-name,.slider-bloger-thema, .blog-element-tag, .slider-bloger-thema-main
            {
                transform: skewX(0deg);
            }
            .article-slider-tags {
                padding: 0px 0px 3px 8px;
            }
            .button-position-main-video-top-slide {
                margin-top: 50%;
                width: 150%;
                left: 0; 
                position: absolute;
            }
            .button-position-popular-video-content-box-main {
                width: 25%;
                position: relative;
                cursor: pointer;
                z-index: 2;
                left: 0;
                margin-left: 39%;
                top: 8%;
            }
            .button-position-popular-video-content-box-width {
                width: 100%;
                position: absolute;
                cursor: pointer;
                z-index: 2;
                left: 0; 
                top: 10%;
            }
            .box-title {
                padding-bottom: 10px;
                font-size: 15px;
                color: white;
            }
            .header-margin-blog{
                padding-left: 0;
                padding-top: 60px;
            }
            .previous-blog{
                padding: 0px;
            }
            body{
                background-color: white;
            }
            .technology-width{
                width: 30px;
            }
            .block-with-line {
                background-color: transparent; 
                padding-top: 0px;
            }
            .button-position-main-video {
                margin-top: 50px;
                width: 150%;
                left: 0%;
                position: absolute;
            }
            .fix-user-block-mob{
                width: 100% !important;
            }
            .one-blog-sign-title {
                position: absolute;
                top: 12px;
                left: 123px;
                font-size: 26px;
                font-weight: bold;
                display: inline-block;
            }
            .user-news-block{
                margin-left: 0px !important;
                top: 10px !important;
            }
            #jssor_2{
                margin-top: 10px;
            }
            .one-video-post-name {
                font-size: 35px;
                font-weight: bold;
            }
            .previous-blog-time-all-blogs{
                width: 100px;
            }
            .top-five-video-width{
                width: 100% !important;
            }
            .all-blog-content-title {
                position: relative;
                top: -40px;
                left: -33px;
            }
            .fix-mob-article{
                margin-left: 0px !important;
            }
            .box-title-time{
                margin-left: 10px;
            }
            .box-title-small{
                margin-left: 10px;
            }
            .social-menu-top-header-one {
                top: -100px;
                right: 1px;
                z-index: 999;
                position: relative;
            }
            .social-header-one {
                position: absolute;
                top: 35px;
                float: right;
                width: 100%;
            }
            .slider-bloger-name {
                text-align: center;
                margin-right: 1%;
                margin-left: 1%;
                font-size: 10px;

            }
            .slider-bloger-thema-main {
                margin-top: 5.5px;
                margin-left: 1%;
                margin-right: 1%;
                font-size: 12px;
            }
            .slider-bloger-name-main {
                margin-top: 3px;
                text-align: center;
                margin-right: 1%;
                margin-left: 2%;
                font-size: 10px;
            }
            .slider-bloger-thema {
                margin-top: 8px;
                margin-left: 1%;
                margin-right: 1%;
                color: #9E9E9E;
                font-weight: bold;
                font-size: 12px;
            }
            .blog-element-tag {
                position: absolute;
                background-color: #9E9E9E;
                padding: 0px;
                width: 40px;
                font-size: 10px;
                right: 0px;
                top: 1px;
                z-index: 99;
                color: white;
            }
            .small-sign-line {
                padding-left: 10px;
                padding-right: 10px;
            }
            .main-article-block {
                margin-left: 0px;
            }
            .full-width-mob{
                padding: 0 !important;
            }
            .second-article-block {
                margin-top: 10px;
                margin-left: 0px;
            }
            .second-block-with-line {
                padding-right: 0px;
                padding-top: 0px;
                width: 100%;
                display: flex;
                position: relative;
                align-items: center;
            }
            .big-sign-line {
                font-size: 25px;
                padding-right: 5px;
                padding-left: 5px; 
            }
            .news-main-title {
                font-size: 16px;
                display: inline-block;
            }
            .previous-blog-box {
                position: relative;
                margin-bottom: 5px;
                padding: 20px;
                border: 2px solid lightgrey;
            }
            .previous-blog-img-width {
                width: 110px;
            }
            .previous-blog-name {
                position: relative;
                top: 0px;
                font-size: 19px;
                font-weight: bold;
                left: 0px;
                display: inline-block;
            }
            .previous-blog-time {
                position: relative;
                width: px;
                right: 0px;
                top: 0px;
                left: auto;
            }
            .previous-blog-title {
                position: relative;
                top: -10px;
                font-size: 18px;
                font-weight: bold;
                padding-bottom: 5px;
            }
            .third-block-with-line {
                padding-right: 0px;
                padding-top: 0px;
                width: 100%;
                display: flex;
                position: relative;
                align-items: center;
            }
            .four-block-with-line {
                padding-left: 20px;
                padding-right: 0px;
                padding-top: 0px;
                width: 100%;
                display: flex;
                position: relative;
                align-items: center;
            }
            .third-article-block {

                margin-top: 10px;
                margin-left: 0px;
            }
            .five-block-with-line {
                margin-top: 0px;
                width: 100%;
                display: flex;
                position: relative;
                align-items: center;
            }
            .main-news-content-box {
                height: 350px;
                margin-top: 10px;
                overflow: hidden;
                overflow-y: scroll;
            }
            .footer-logo {
                width: 50%;
                margin-top: 10px;
                margin-left: 0px;
                float: inherit; 
                padding-right: 0px;
            }
            .footer-menu {
                text-align: center;
                margin-left: 0px;
                margin-top: 33px;
                font-size: 20px;
            }
            .social-menu-footer {
                text-align: center;
                padding-top: 15px;
                margin-left: 0px; 
            }
            .social-text-footer {
                margin-top: 10px;
                margin-left: 0px; 
                color: white;
                padding-bottom: 20px;
                text-align: justify;
            }
            .madeby {
                position: absolute;
                font-size: 18px;
                color: white;
                bottom: 0px;
                padding-top: 0px;

                text-align: center;
            }
            .footer-about {
                padding-top: 0px;
                color: white;
                text-align: justify;
            }
            .box-title {
                margin-left: 10px;
                padding-bottom: 10px;
                font-size: 20px;
                color: white;
            }
            .social-menu-top{
                margin-top: 5px;
            }
            .content-box {
                padding-left: 10px;
                bottom: 22%;
                width: 100%;
            }
            .content-box-all-video {
                position: relative;
                padding-left: 10px;
                bottom: 130px;
                width: 100%;
            }
            .video-container{
                margin-top: 30px;
            }
            .right-block-video{
                max-width: 100%;    
            }
            .right-block-second{
                max-width: 100%;  
                max-height: 180px;  
            }
            .social-menu-bottom {
                bottom: 8%;
                position: absolute;
                right: 5%;
                z-index: 55;
            }
            .social-menu-bottom-all-video {
                bottom: 20px;
                position: absolute;
                right: 5%;
                z-index: 55;
            }
            .header-logo {
                width: 70px;
            }
            .second-slider-box-title {
                font-size: 50px;
            }
            .second-slider-box-title-small{
                font-size: 40px;
            }
            .second-slider-content{
                bottom: -40%;
            }
            .sign-line-korespond{
                font-size: 10px;
            }
            .button-share{
                font-size: 12px;
            }
            .previous-blog-name-all-blogs{
                font-size: 20px;
            }
            #weatherWidget {
                position: relative;
                width: 100%;
                font-family: 'Lato', Calibri, Arial, sans-serif;
                font-weight: 400;
                margin-top: -30px;
                font-size: 1em;
                color: #333;
            }
            .rb-grid li{
                height: 11em;
            }
            #jssor_3{
                width: 100% !important;
            }
            .button-share-pad{
                padding: 0;
            }
            .narod-korespond {
                margin-top: 15px;
            }
        } 
    </style>

</head>
<body>
    <div class="header">
        <div class="social-menu-top hide-on-med-and-down">
            <div class="menu-list">
                <a class="modal-trigger" href="#modal-login" >
                    <img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/man.svg" alt="Логотип">
                </a>
            </div>
            <div class="menu-list">
                <a href="#modal2">
                    <img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип">
                </a>
            </div>
        </div>
        <div class="social-menu-bottom hide-on-med-and-down">
            <div class="menu-list">
                <a href="https://www.youtube.com/channel/UCYMgvYAKTnPfZ8FjuXLYaEQ" ><img  class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
            </div>

            <div class="menu-list">
                <a href="https://twitter.com/CentralneMedia" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
            </div>

            <div class="menu-list">
                <a href="https://www.facebook.com/centralnemedia/"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
            </div>
        </div>
        <div class="social-menu-top hide-on-large-only">
            <div class="menu-list">
                <a href="#" data-activates="slide-out" class="button-collapse">
                    <img class="social-logo-head" src="<?php bloginfo('template_url') ?>/img/menu-head.svg" alt="Логотип">
                </a>
            </div>
            <div class="menu-list">
                <a href="#modal-login">
                    <img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/man.svg" alt="Логотип">
                </a>
            </div>
            <div class="menu-list">
                <a href="#modal2">
                    <img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип">
                </a>
            </div>

        </div>

        <nav>
            <div class="nav-shadow">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="header-logo" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg" alt="Логотип">
                </a>
                <div class="logo-text hide-on-small-only ">
                    <a href="<?php echo get_home_url(); ?>">центральне медіа</a>
                </div>
                <ul id="nav-mobile" class="hide-on-med-and-down">
                    <li><a class="" href="<?php echo get_post_type_archive_link('video'); ?>">ВІДЕО</a></li>
                    <li><a class="" href="<?php echo get_post_type_archive_link('articles'); ?>">СТАТТІ</a></li>
                    <li><a class="" href="<?php echo get_post_type_archive_link('blogs'); ?>">БЛОГИ</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--SideNav Structure-->
    <ul id="slide-out" class="side-nav">
        <?php
        if (is_user_logged_in() ) {
            ?>
            <li>
                <div class="userView black-text ">
                    <div class="if-not-login">
                        <div class="black-text">
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
                        <div> <a class="black-text" href="<?php bloginfo('url') ?>/wp-admin/index.php">Адміністрування</a> </div>
                        <?php
                        else :
                            endif;
                        endif;
                        ?>
                        <a class="black-text" href="<?php bloginfo('url') ?>/wp-admin/profile.php" title="изменить">Редагувати</a>
                    </div>
                </div>
            </li>
            <?php
        }
        ?>

        <li><a class="black-text" href="<?php echo get_home_url(); ?>">Головна</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('news'); ?>">Новини</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('articles'); ?>">Статті</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('video'); ?>">Відео</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('blogs'); ?>">Блоги</a></li>
    </ul>
    <!-- end SideNav Structure-->

    <?php author_log(); ?>

    <!-- Modal Structure -->
    <div id="modal2" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>ПОШУК</h4>
            <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input class="search-button" type="search" placeholder="Пошук..." required name="s">
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat black-text">ЗАКРИТИ</a>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal4" class="modal">
        <div class="modal-content">
            <h4>НАРОДНИЙ КОРИСПОНДЕНТ</h4>
            <p>Поділіться своєю новиною!</p>
            <?php echo do_shortcode( '[contact-form-7 id="388" title="Народний кориспондент"]' ); ?>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green black-text btn-flat">Закрити</a>
        </div>
    </div>


