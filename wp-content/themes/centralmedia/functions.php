<?php
	add_theme_support( 'post-thumbnails' ); // adds capabilities to create thumbnails for posts

	function register_styles() { // adds files with styles
		wp_enqueue_style( 'materialize.min', get_template_directory_uri() . '/css/materialize.min.css' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
		wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
		wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );
		wp_enqueue_style( 'google-icon-font', get_template_directory_uri() . '/css/google-icon-font.css' ); // Import Google Icon Font
	}
	add_action( 'wp_enqueue_scripts', 'register_styles' );

	function register_scripts() { //adds files with script
		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery-2.1.1.min', get_template_directory_uri() . '/js/jquery-2.1.1.min.js');
		wp_enqueue_script( 'materialize.min', get_template_directory_uri() . '/js/materialize.min.js');
		wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js');
		wp_enqueue_script( 'typed.min', get_template_directory_uri() . '/js/typed.min.js');
		wp_enqueue_script( 'd97a6585c2', get_template_directory_uri() . '/js/d97a6585c2.js'); // https://use.fontawesome.com/d97a6585c2.js
		//wp_enqueue_script( 'ajax-poll', get_template_directory_uri() . '/Ajax_Poll/ajax-poll.php'); - підключається в футері
	}
	add_action( 'wp_enqueue_scripts', 'register_scripts' );

	register_nav_menu( 'menu', 'Меню сайту' ); // addition of the ability to create menus

	register_sidebar();


	function short_desc_post($charlength) {		// function for display short content for posts
		$excerpt = get_the_excerpt();
		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength);
			echo $subex . '...';
		} else {
			echo $subex;
		}
	}


	//settings for display archive posts
		function my_pre_get_posts( $query ) {
		    //if ( ! is_admin() && $query->is_main_query() ) {
			$queried_object = get_queried_object();
			if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'news' && $query->is_main_query() ) { //якщо запит виконується не в адмінці, на сторінці архівів, сторінка є ахівом новин та якщо запит є головним
				$query->set( 'posts_per_page', 10 );
			}
			else if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'articles' && $query->is_main_query() ) {
		        $query->set( 'posts_per_page', 12 );
			}
			else if ( !is_admin() && $query->is_archive && $queried_object->query_var == 'blogs' && $query->is_main_query() ) {
		        $query->set( 'posts_per_page', 6 );
			}
			else if ( !is_admin() && $query->is_search && $query->is_main_query() ) {
		        $query->set( 'posts_per_page', 10 );
			}
		}
		add_action( 'pre_get_posts', 'my_pre_get_posts' );
	//end settings for display archive posts


	// pagination settings
		// delete H2 from pagination template
		add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
		function my_navigation_template( $template, $class ){
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
			'prev_text' => __( '«' ),
			'next_text' => __( '»' ),
		);
	// end pagination settings
?>
