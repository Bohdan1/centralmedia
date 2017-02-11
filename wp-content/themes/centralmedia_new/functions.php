<?php
add_theme_support( 'post-thumbnails' ); // adds capabilities to create thumbnails for posts

function register_styles() { // adds files with styles
	
    wp_enqueue_style( 'slick-slider', get_template_directory_uri() . '/css/slick-slider.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );
    wp_enqueue_style( 'google-icon-font', get_template_directory_uri() . '/css/google-icon-font.css' ); // Import Google Icon Font
    wp_enqueue_style( 'default', get_template_directory_uri() . '/css/weatherWidget/default.css' );
    wp_enqueue_style( 'climacons', get_template_directory_uri() . '/css/weatherWidget/climacons.css' );
    wp_enqueue_style( 'component', get_template_directory_uri() . '/css/weatherWidget/component.css' );
}
add_action( 'wp_enqueue_scripts', 'register_styles' );
// function register_scripts() { // adds files with script
// 	//wp_deregister_script('jquery');
// https://use.fontawesome.com/d97a6585c2.js
// }
// add_action( 'wp_enqueue_scripts', 'register_scripts' );
// register_nav_menu( 'menu', 'Меню сайту' ); // addition of the ability to create menus
// register_sidebar();
function short_post_desc( $charlength ) {        //function for display short content for posts
    $excerpt = get_the_excerpt();
    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength );
        return $subex . '...';
    } else {
        return $excerpt;
    }
}

function short_post_title( $charlength ) {        //function for display short title for posts
    $excerpt = get_the_title();
    $excerpt = trim( $excerpt );
    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength );
        return $subex . '...';
    } else {
        return $excerpt;
    }
}

function custom_post_permalink() {
    $post_type = get_post_type();
    $post_link = get_permalink();
    global $post;
    /*
    if ( $post_type == 'video' ) {
        $post_link = get_post_meta( $post->ID, 'video_url', true );
    }
    */
    if ( $post_type == 'partner-news' ) {
        $post_link = get_post_meta( $post->ID, 'partner_news_url', true );
    }
    return $post_link;
}

//show latest news
function show_short_latest_news() {
    global $date;
    if ( $date != get_the_time('j F Y l') ) {
        $date = get_the_time('j F Y l');
        echo '<div class="next-day-news">' .  $date . '</div>';
    }
    echo '
        <div class="news-block">
            <div class="news-main-img">
                <img class="news-main-img-width-cm" src="' . get_template_directory_uri() . '/img/logo/CMedia.svg">
            </div>
            <div class="news-main-title hover-link">
                <div class="news-time">' .
                    get_the_time('G:i') . '
                </div>
                <a href="'. get_the_permalink() .'" class="black-text">' .
                   short_post_title(75) . '
                </a>
            </div>
        </div>';
}

//show post for slider
function show_slider_post() { //show_big_post()
    echo '
        <div>
            <img data-u="image" class="second-slider-img" src="' . get_the_post_thumbnail_url() . '" />
            <div class="mask">
                <div class="view-count-top">
                    <img class="count-width-top" src="' . get_template_directory_uri() . '/img/eye.svg">
                    <span class="count-number-top">' . getPostViews( get_the_ID() ) . '</span>
                </div>
                <div class="second-slider-content">
                    <br>
                    <div class="second-slider-title-tag">';
                        $category = get_the_category();
                        if ( !empty( $category ) ) {
                            $max_categories = 3;    //the maximum number of categories that need to display
                            if ( count( $category ) < $max_categories ) {
                                $max_categories = count( $category );
                            }
                            for ( $i = 0; $i < $max_categories; $i++ ) {
                                echo '<a href="' . get_category_link( $category[$i]->cat_ID ) . '" class="no-hover-blog article-slider-tags">' . $category[$i]->cat_name . '</a>';
                            }
                        }
                        echo '
                    </div>
                    <div class="second-slider-box-title ">
                        <a href="' . get_the_permalink() .'">' . short_post_title(120) . '</a>
                    </div>
                    <div class="second-slider-box-title-time ">' . get_the_time('d.m.Y') . '</div>
                    <br>    
                </div>
            </div>
        </div>';
}


//big template for post 
function show_big_post() {
    echo '
        <div style="background-image: url(' . get_the_post_thumbnail_url() . ');" class="second-article-block-all-article">
            <div class="mask">
                <div class="view-count"><img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye.svg">
                    <span class="count-number">' . getPostViews( get_the_ID() ) . '</span>
                </div>
                <div class="main-article-content-box">
                    <div class="title-tag">';
                        $category = get_the_category();
                        if ( !empty($category) ) {
                            $category = $category[0];
                            echo '<a href="' . get_category_link( $category->cat_ID ) . '" class="no-hover-blog">' . $category->cat_name . '</a>';
                        }
                        echo '
                    </div>
                    <div class="box-title fix-mob-article ">
                        <a href="' . get_the_permalink() .'">' . short_post_title(75) . '</a>
                    </div>
                    <div class="box-title-time fix-mob-article">' . get_the_time('d.m.Y') . '</div>
                </div>
            </div>
        </div>';
}


//small template for post 
function show_small_post( $height = null ) {
    echo '
        <div class="second-article-block" style="background-image: url(' . get_the_post_thumbnail_url() . '); height:' . $height .'">
            <div class="mask">
                <div class="view-count">
                    <img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye.svg">
                    <span class="count-number">' . getPostViews( get_the_ID() ) . '</span>
                </div>
                <div class="main-article-content-box">
                    <div class="title-tag">';
                        $category = get_the_category();
                        if ( !empty($category) ) {
                            $category = $category[0];
                            echo '<a href="' . get_category_link( $category->cat_ID ) . '" class="no-hover-blog">' . $category->cat_name . '</a>';
                        }
                        echo '
                    </div>
                    <div class="box-title fix-mob-article ">
                        <a href="' . get_the_permalink() .'">' . short_post_title(65) . '</a>
                    </div>
                    <div class="box-title-time fix-mob-article">' . get_the_time('d.m.Y') . '</div>
                </div>
            </div>
        </div>
    ';
}


//show popular video on homepage
function show_popular_video() {
                                              //style="min-height:260px;"
    echo '
        <div class="col l4 s12 m4 video-devider" style="min-height:260px;">
            <div style="background-image: url(' . get_the_post_thumbnail_url() . ');" class="popular-video-block">
                <div class="mask">
                <div class="view-count-blog">
                                    <img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye.svg">
                                    <span class="count-number white-text">' . getPostViews( get_the_ID() ) . '</span>
                                </div>
                    <div class="button-position-popular-video-content-box">
                        <a href="' . get_the_permalink() . '" >
                            <img class="button-hover button-position-popular-video-content-box-width" src="' . get_template_directory_uri() . '/img/play-button.svg" alt="Логотип">
                        </a>
                    </div>
                    <div class="popular-video-description hover-link">
                        <a href="'. get_the_permalink() .'" >' . 
                            short_post_title(75) . '
                        </a>
                    </div>
                    <div class="popular-video-content-box">
                        <div class="popular-video-tag">';
                            $category = get_the_category();
                            if ( !empty($category) ) {
                                $category = $category[0];
                                echo '<a href="' . get_category_link( $category->cat_ID ) . '" class="no-hover-blog">' . $category->cat_name . '</a>';
                            }
                            echo '
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}


//settings for display archive posts
    function my_pre_get_posts( $query ) {
        if ( !is_admin() && $query->is_main_query() ) {
            $queried_object = get_queried_object();
            if ( $query->is_archive ) {
                if ( $queried_object->query_var == 'news' ) { //якщо запит виконується не в адмінці, на сторінці архівів, сторінка є ахівом новин та якщо запит є головним
                    $query->set( 'posts_per_page', 10 );
                }
                else if ( $queried_object->query_var == 'articles' ) {
                    $query->set( 'posts_per_page', 12 );
                }
                else if ( $queried_object->query_var == 'blogs' ) {
                    $query->set( 'posts_per_page', 6 );
                }
                else if ( $queried_object->query_var == 'video' ) {
                    $query->set( 'posts_per_page', 12 );
                }
                else if ( $queried_object->query_var == 'partner-news' ) {
                    $query->set( 'posts_per_page', 15 );
                }
            }
            else if ( $query->is_search ) {
                $query->set( 'posts_per_page', 10 );
            }
        }
    }
    add_action( 'pre_get_posts', 'my_pre_get_posts' );
//end settings for display archive posts



//tag and author settings
    function my_pre_get_tags( $query ) {
        if ( !is_admin() && $query->is_archive ) {
            if ( $query->is_tag || $query->is_author ) {
                $query->set( 'post_type', array('news', 'articles', 'blogs', 'partner-news', 'video') );
            }
        }
    }
    add_action( 'pre_get_posts', 'my_pre_get_tags' );

    function author_posts_count( $author_id ) {        //counting the number of posts
        $published_posts = array();
        $published_posts[] = count_user_posts( $author_id, 'news', true );
        $published_posts[] = count_user_posts( $author_id, 'articles', true );
        $published_posts[] = count_user_posts( $author_id, 'blogs', true );
        $published_posts[] = count_user_posts( $author_id, 'partner-news', true );
        $published_posts[] = count_user_posts( $author_id, 'video', true );
        $posts_count = 0;
        for ( $i = 0; $i < count( $published_posts ); $i++ ) {
            $posts_count += $published_posts[$i];
        }
        return $posts_count;
    }
//end and author tag settings



//pagination settings
    //delete H2 from pagination template
    add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );
    function my_navigation_template( $template, $class ) {
    /*
    Вид базового шаблону:
    <nav class="navigation %1$s" role="navigation">
    <h2 class="screen-reader-text">%2$s</h2>
    <div class="nav-links">%3$s</div>
    </nav>
    */
    return '
    <nav class="%1$s" role="navigation">
        <div class="nav-links">%3$s</div>
    </nav>    
    ';
    }
    $pagination_args = array(
        'prev_text' => __( '&#8249;' ),
        'next_text' => __( '&#8250;' ),
        );
//end pagination settings



//login form settings
    function author_log() {
        if ( !is_user_logged_in() ): ?>
        <div id="modal-login" class="modal">
            <div class="modal-content">
                <h4 class=" ">Авторизація</h4>
                <a href="#!" class="modal-action modal-close waves-effect waves-red accent-4 btn-flat">
                    <i class="material-icons">&#xE14C;</i>
                </a>
                <?php 
                        $Path=$_SERVER['REQUEST_URI'];
                        $current_page= get_home_url() . $Path;
                ?>
                <form class="login-form " name="form" action="<?php echo wp_login_url( $current_page ); ?>" method="post">
                    <div>
                        <input type="text" name="log" value="<?php echo wp_specialchars( stripslashes( $user_login ), 1 ) ?>" id="login" placeholder="Логін" required/>
                        <input type="password" name="pwd" id="password" placeholder="Пароль" required/>
                        <button type="submit" id="submit" name="submit" class="waves-effect  waves-red btn-flat"><span class="enter-button-styles">Вхід</span></button>
                        <a href="<?php bloginfo('url') ?>/registration.php" class="waves-effect black-text  waves-red btn-flat">Зареєструватися</a>
                        <div>
                            <a href="<?php bloginfo('url') ?>/wp-login.php?action=lostpassword" id="forgot" class="  black-text waves-effect waves-red btn-flat">Забули пароль?</a>
                        </div>
                    </div>
                </form>
                <div class="modal-fooedter "> </div>
            </div>
        </div>
    <? else: ?>
    <div id="modal-login" class="modal">
        <div class="modal-content">
            <a href="#!" class="modal-action modal-close waves-effect  waves-red accent-4 btn-flat black-text right">
                <i class="material-icons black-text">&#xE14C;</i>
            </a>
            <div id="popup_name" class="popup_block">
                <div id="loginForm" action="" method="post">
                    <div class="cont-side">
                        <div class="row logged-user">
                            <div class="col l5 s12 m12 logged-user-photo">
                                <?php
                                    global $current_user;
                                    get_currentuserinfo();
                                    setup_postdata( $post );
                                    //$current_user = wp_get_current_user();
                                ?>
                                <img class="logged-user-photo" src="<?php echo get_wp_user_avatar_src( get_the_author_meta('ID') ); ?>" alt="bloger_avatar">
                            </div>
                            <div class="col l7 s12 m12  ">
                                <h4 class="logged-user-sign">Ваш профіль</h4>
                                <div class="logged-user-name"><?php echo $current_user->user_firstname . ' ' . $current_user->user_lastname; ?></div>
                                <div class="logged-user-login"><?php echo 'Логін: ' . $current_user->user_login; ?></div>
                                <div class="about-user-info">
                                    <?php echo get_the_author_meta( 'description' ); ?>
                                </div>
                                <?php
                                    global $user_ID;
                                    if( $user_ID ) :
                                        if( current_user_can('level_2') or current_user_can('level_10') ) : ?>
                                    
                                    <?php
                                    else :
                                        endif;
                                    endif;
                                ?>
                            </div>
                        </div>
                        <div class=" logged-user-tools-padding">
                            <span class="looged-user-tool"> <a class="black-text" href="<?php bloginfo('url') ?>/wp-admin/index.php">Адміністрування</a> </span>
                            <span class="looged-user-tools"> <a class="black-text" href="<?php bloginfo('url') ?>/wp-admin/profile.php" title="изменить">Редагувати</a> </span>
                        </div>
                        <div class="submit" style="float:right; padding-bottom:10px;">
                            <?php 
                                $Path=$_SERVER['REQUEST_URI'];
                                $current_page= get_home_url() . $Path;
                            ?>
                            <a href="<?php echo wp_logout_url( $current_page );    ?>" class="modal-action waves-effect waves-red accent-4 btn-flat">
                                <i class="material-icons black-text">Вийти</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif;
    }
//end login form settings



//registration form settings
    function registration_form( $username, $password, $email, $website, $first_name, $last_name, $bio ) {
        echo '
            <form class="contact_form" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
                <ul>
                    <li>
                        <h2 class="center">Реєстрація</h2>
                    </li>
                    <li>
                        <label for="username">Логін <strong>*</strong></label>
                        <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '" required >
                    </li>

                    <li>
                        <label for="password">Пароль <strong>*</strong></label>
                        <input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '" required>
                    </li>

                    <li>
                        <label for="email">Email <strong>*</strong></label>
                        <input type="text" name="email" value="' . ( isset( $_POST['email'] ) ? $email : null ) . '" required>
                    </li>

                    <li>
                        <label for="website">Веб-сайт</label>
                        <input type="text" name="website" value="' . ( isset( $_POST['website'] ) ? $website : null ) . '">
                    </li>

                    <li>
                        <label for="firstname">Ім\'я</label>
                        <input type="text" name="fname" value="' . ( isset( $_POST['fname'] ) ? $first_name : null ) . '">
                    </li>

                    <li>
                        <label for="website">Прізвище</label>
                        <input type="text" name="lname" value="' . ( isset( $_POST['lname'] ) ? $last_name : null ) . '">
                    </li>

                    <li>
                        <label for="bio">Біографічна інформація</label>
                        <textarea name="bio">' . ( isset( $_POST['bio']) ? $bio : null ) . '</textarea>
                    </li>

                    <li>
                        <input type="submit" name="submit" value="Зареєструватися" class="submit btn-flat green waves-effect waves-red white-text"/>
                    </li>
                    <div class="registration-errors">';
                        global $reg_errors;
                        if ( is_wp_error( $reg_errors ) ) {
                            foreach ( $reg_errors->get_error_messages() as $error ) {
                                echo '<div class="registration-error"><strong>Помилка</strong>:' . $error . '<br/></div>';
                            }
                        }
                    echo '</div>
                </ul>
            </form>
        ';
    }

    function registration_validation( $username, $password, $email, $website, $first_name, $last_name, $bio ) {
        global $reg_errors;
        $reg_errors = new WP_Error;
        if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
            $reg_errors->add('field', 'Заповніть усі обов\'язкові поля');
        }
        if ( 4 > strlen( $username ) ) {
            $reg_errors->add( 'username_length', 'Ім\'я користувача повинно містити хоча б 4 символи' );
        }
        if ( username_exists( $username ) )
            $reg_errors->add('user_name', 'На жаль, це ім\'я користувача вже існує!');
        if ( !validate_username( $username ) ) {
            $reg_errors->add( 'username_invalid', 'На жаль, введене Вами ім\'я користувача введене неправильно' );
        }
        if ( 5 > strlen( $password ) ) {
            $reg_errors->add( 'password', 'Довжина пароля повинна бути більше 5 символів' );
        }
        if ( !is_email( $email ) ) {
            $reg_errors->add( 'email_invalid', 'Email введений неправильно' );
        }
        if ( email_exists( $email ) ) {
            $reg_errors->add( 'email', 'Email вже використовується' );
        }
        if ( !empty( $website ) ) {
            if ( !filter_var( $website, FILTER_VALIDATE_URL ) ) {
                $reg_errors->add( 'website', 'Введена неправильна адреса веб-сайту' );
            }
        }
    }

    function complete_registration() {
        global $reg_errors, $username, $password, $email, $website, $first_name, $last_name, $bio;
        if ( 1 > count( $reg_errors->get_error_messages() ) ) {
            $userdata = array(
                'user_login'    =>   $username,
                'user_email'    =>   $email,
                'user_pass'     =>   $password,
                'user_url'      =>   $website,
                'first_name'    =>   $first_name,
                'last_name'     =>   $last_name,
                'description'   =>   $bio,
                );
            $user = wp_insert_user( $userdata );
            echo '<div class="">Реєстрація завершена. Перейдіть на <a href="' . get_site_url() . '/wp-login.php">сторінку авторизації</a>.</div>';  
            exit;
        }
    }

    function custom_registration_function() {
        if ( isset($_POST['submit'] ) ) {
            registration_validation(
                $_POST['username'],
                $_POST['password'],
                $_POST['email'],
                $_POST['website'],
                $_POST['fname'],
                $_POST['lname'],
                $_POST['bio']
            );

            //sanitize user form input
            global $username, $password, $email, $website, $first_name, $last_name, $bio;
            $username   =   sanitize_user( $_POST['username'] );
            $password   =   esc_attr( $_POST['password'] );
            $email      =   sanitize_email( $_POST['email'] );
            $website    =   esc_url( $_POST['website'] );
            $first_name =   sanitize_text_field( $_POST['fname'] );
            $last_name  =   sanitize_text_field( $_POST['lname'] );
            $bio        =   esc_textarea( $_POST['bio'] );

            //call @function complete_registration to create the user
            //only when no WP_error is found
            complete_registration(
                $username,
                $password,
                $email,
                $website,
                $first_name,
                $last_name,
                $bio
            );
        }

        registration_form(
            $username,
            $password,
            $email,
            $website,
            $first_name,
            $last_name,
            $bio
        );
    }
//end registration form settings



//capabilityes
    require 'template-parts/custom-posts-types.php';
//end capabilityes



//hide not used fields
    function remove_menus() {
        global $menu;
        $restricted = array(
            //__('Dashboard'),
            __('Posts'),
            __('Pages'),
        );
        end ( $menu );
        while ( prev($menu) ) {
            $value = explode(' ', $menu[key($menu)][0]);
            if( in_array( ($value[0] != NULL ? $value[0] : "" ) , $restricted ) ) {
                unset( $menu[key($menu)] );
            }
        }
    }
    add_action( 'admin_menu', 'remove_menus' );
//end hide not used fields



//custom login form
    function my_custom_login_logo(){
        echo '<style type="text/css">
            h1 a { background-image:url('.get_bloginfo( 'template_directory' ).'/img/logo/login-logo.png) !important;}
        </style>';
    }
    add_action('login_head', 'my_custom_login_logo');
//end custom login form



//algorithm declension of nouns after numerals 
    function getNumEnding( $number, $endingArray ) { 
        $number = $number % 100; 
        if ( $number>=11 && $number<=19 ) { 
            $ending=$endingArray[2]; 
        } 
        else { 
            $i = $number % 10; 
            switch ( $i ) { 
                case (1): $ending = $endingArray[0]; break; 
                case (2): 
                case (3): 
                case (4): $ending = $endingArray[1]; break; 
                default: $ending=$endingArray[2]; 
            } 
        } 
        return $ending; 
    } 
//end algorithm declension of nouns after numerals



//delete widgets from console
    function clear_wp_dash() {
        $dash_side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
        $dash_normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];
        unset( $dash_side['dashboard_primary'] );        //Блог WordPress
        unset( $dash_side['dashboard_secondary'] );    //Інші новини WordPress
    }
    add_action('wp_dashboard_setup', 'clear_wp_dash' );
//end delete widgets from console
        


//comments settings
    if (!class_exists( 'clean_comments_constructor') ) { //если класс уже есть в дочерней теме - нам не надо его определять
        class clean_comments_constructor extends Walker_Comment { //класс, который собирает всю структуру комментов
            public function start_lvl( &$output, $depth = 0, $args = array() ) { //что выводим перед дочерними комментариями
                $output .= '<ul class="children">' . "\n";
            }
            public function end_lvl( &$output, $depth = 0, $args = array() ) { //что выводим после дочерних комментариев
                $output .= "</ul><!-- .children -->\n";
            }
            protected function comment( $comment, $depth, $args ) { //разметка каждого комментария, без закрывающего </li>!
                $classes = implode( ' ', get_comment_class() ) . ( $comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : '' ); //берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
                echo '<li id="comment-' . get_comment_ID() . '" class="' . $classes . ' media">'."\n"; //родительский тэг комментария с классами выше и уникальным якорным id
                echo '<div class="header-comment"><div class="header-comment"><div class="media-left">' . get_avatar( $comment, 64, '', get_comment_author(), array('class' => 'media-object') ) . "</div>\n"; //покажем аватар с размером 64х64
                echo '<div class="media-body">';
                 
                //echo ' '.get_comment_author_email(); //email автора коммента, плохой тон выводить почту
                echo ' ' . get_comment_author_url(); //url автора коммента
               
                echo '<br><div class="meta media-heading ">Автор: ' . get_comment_author() . "\n";//имя автора коммента
                if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш коментар буде опублікований після провірки модератором.</em>' . "\n"; //если комментарий должен пройти проверку
                 echo ' <br>Додано: ' . get_comment_date('j F Y в H:i') . "\n"; //дата и время комментирования
                echo '</div> </div>';
                echo '</div>' . "\n"; //закрываем див
                comment_text() . "\n"; //текст коммента
                 $reply_link_args = array( //опции ссылки "ответить"
                    'depth' => $depth, //текущая вложенность
                    'reply_text' => 'Відповісти', //текст
                    'login_text' => 'Авторизуйтесь щоб відповісти' //текст если юзер должен залогинеться
                );
                echo get_comment_reply_link( array_merge($args, $reply_link_args) ); //выводим ссылку ответить
            }
            public function end_el( &$output, $comment, $depth = 0, $args = array() ) { //конец каждого коммента
                $output .= "</li><!-- #comment-## -->\n";
            }
        }
    }
//end comments settings



//number of views
    function getPostViews( $postID ) {
        $count_key = 'post_views_count';
        $count = get_post_meta( $postID, $count_key, true );
        if( $count=='' ) {
            delete_post_meta( $postID, $count_key );
            add_post_meta( $postID, $count_key, '0' );
            return "0";
        }
        return $count;
    }

    //Варіант з врахуванням усіх переглянутих постів
    function setPostViews( $postID ) {
        if( $_COOKIE['viewed_page'] != $postID ) {
            setcookie( 'viewed_page', $postID, time()+1800 );
            $count_key = 'post_views_count';
            $count = get_post_meta( $postID, $count_key, true );
            if( $count == '' ) {
                $count = 0;
                delete_post_meta( $postID, $count_key );
                add_post_meta( $postID, $count_key, '0' );
            }
            else {
                $count++;
                update_post_meta( $postID, $count_key, $count );
            }
        }
    }
//end number of views



//top users
    function top_authors( $number = 10 ) {
        $top_users = array();
        $args = array(
            'role' => 'contributor',
            'has_published_posts' => true
        );
        //$users = get_users('orderby=nicename&role=contributor');
        $users = get_users( $args );
        foreach ( $users as $user ) {
            $post_count = count_user_posts( $user->ID );
            $top_users[$user->ID] = $post_count;
        }
        arsort( $top_users );
        $i = 0;
        foreach( $top_users as $key => $value ) {
            $i++;
            if( $i <= $number ) {
                $user = get_userdata($key);
                $author_posts_url = get_author_posts_url($key);
                $first_name = $user->first_name;
                $last_name = $user->last_name;
                echo '<a href="' . get_author_posts_url( $user->ID ) . '">';
                    if( $first_name && $last_name) {
                        echo '<li>' . $first_name . $last_name . '</li>';
                    }
                    else {
                        echo '<li>' . $user->user_login . '</li>';
                    }
                echo '</a>';
            }
        }
    }
//end top users



//get news using ajax
    function true_loadmore_scripts() {
        wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
        wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
    }
    add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );


    function true_load_posts(){
        $args = unserialize(stripslashes($_POST['query']));
        $args['paged'] = $_POST['page'] + 1; // следующая страница
        $args['post_status'] = 'publish';
        $q = new WP_Query($args);
        if( $q->have_posts() ):
            while($q->have_posts()): $q->the_post();
                show_short_latest_news();
            endwhile;
        endif;
        wp_reset_postdata();
        die();
    }
     
    add_action('wp_ajax_loadmore', 'true_load_posts');
    add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
//end get news using ajax



//ajax like for posts
    if( wp_doing_ajax() ) {
        add_action('wp_ajax_nopriv_post-like', 'post_like');
        add_action('wp_ajax_post-like', 'post_like');
    }

    wp_enqueue_script('like_post', get_template_directory_uri().'/js/post-like.js', array('jquery'), '1.0', true );
    wp_localize_script('like_post', 'ajax_var', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-nonce')
    ));

    function post_like() {
        // Check for nonce security
        $nonce = $_POST['nonce'];
        if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
            die ( 'Busted!' );
        if( isset( $_POST['post_like'] ) ) {
            // Retrieve user IP address
            $ip = $_SERVER['REMOTE_ADDR'];
            $post_id = $_POST['post_id'];
            // Get voters'IPs for the current post
            $meta_IP = get_post_meta( $post_id, "voted_IP" );
            $voted_IP = $meta_IP[0];
            if(!is_array( $voted_IP) )
                $voted_IP = array();
            // Get votes count for the current post
            $meta_count = get_post_meta( $post_id, "votes_count", true );
            // Use has already voted ?
            if(!hasAlreadyVoted( $post_id) ) {
                $voted_IP[$ip] = time();
                // Save IP and increase votes count
                update_post_meta( $post_id, "voted_IP", $voted_IP );
                update_post_meta( $post_id, "votes_count", ++$meta_count );
                // Display count (ie jQuery return value)
                echo $meta_count;
            }
            else
                echo "already";
        }
        exit;
    }

    function hasAlreadyVoted( $post_id ) {
        global $timebeforerevote;
        $timebeforerevote = 120; // = 2 hours - через скільки користувач зможе проголосувати ще раз
        
        // Retrieve post votes IPs
        $meta_IP = get_post_meta( $post_id, "voted_IP" );
        $voted_IP = $meta_IP[0];
        if(!is_array($voted_IP))
            $voted_IP = array();
        // Retrieve current user IP
        $ip = $_SERVER['REMOTE_ADDR'];
        // If user has already voted
        if( in_array( $ip, array_keys( $voted_IP ) ) ) {
            $time = $voted_IP[$ip];
            $now = time();
            // Compare between current time and vote time
            if( round( ($now - $time) / 60 ) > $timebeforerevote )
                return false;
            return true;
        }
        return false;
    }

    function getPostLikeLink( $post_id ) {
        $vote_count = get_post_meta( $post_id, "votes_count", true );
        if( $vote_count == '' ) {
            $vote_count = 0;
        }
        $output = '<p class="post-like">';
        if( hasAlreadyVoted( $post_id ) ) {
            $output .= ' <span title="Ви вже проголосували" class="like alreadyvoted">Ви вже проголосували </span>';
        }
        else {
            $output .=
                '<a href="#" data-post_id="'.$post_id.'" class="black-text">
                    <span title="Подобається"class="qtip like">Подобається</span>
                </a>';
            }
        $output .= '(Всього <span class="count">'.$vote_count.'</span> вподобань)</p>';
        return $output;
    }
//end ajax like for posts

//turning off the admin panel for all users 
show_admin_bar(false);

?>