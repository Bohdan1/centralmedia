<!DOCTYPE html>
<html lang="uk">
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
                    <img class="header-logo" src="<?php bloginfo('template_url') ?>/img/logo/CMedia2.svg" alt="Логотип">
                </a>
                <div class="logo-text hide-on-small-only ">
                    <a href="<?php echo get_home_url(); ?>">центральне медіа</a>
                </div>
                <ul id="nav-mobile" class="hide-on-med-and-down">
                    <li><a class="" href="<?php echo get_post_type_archive_link('video'); ?>">ВІДЕО</a></li>
                    <li><a class="" href="<?php echo get_post_type_archive_link('articles'); ?>">СТАТТІ</a></li>
                    <li><a class="" href="<?php echo get_post_type_archive_link('blogs'); ?>">БЛОГИ</a></li>
                    <li><a class="" href="<?php echo get_post_type_archive_link('news'); ?>">НОВИНИ</a></li>
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

        <li><a class="black-text" href="<?php echo get_post_type_archive_link('articles'); ?>">СТАТТІ</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('video'); ?>">ВІДЕО</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('blogs'); ?>">БЛОГИ</a></li>
        <li><a class="black-text" href="<?php echo get_post_type_archive_link('news'); ?>">НОВИНИ</a></li>
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


