<?php
	add_theme_support( 'post-thumbnails' ); // добавлення можливості створювати мініатюри для постів

	function register_styles() { // adds files with styles
		wp_enqueue_style( 'materialize.min', get_template_directory_uri() . '/css/materialize.min.css' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
		wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
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

	register_nav_menu( 'menu', 'Меню сайту' ); // добавлення можливості створювати меню

	/*
	// Обмеження кількості слів для функції the_except()
	function new_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	//end

	//Створення посилання "Читати далі ..." в кінці
	add_filter('excerpt_more', 'new_excerpt_more');
	function new_excerpt_more($more) {
		global $post;
		return '...<div><a href="'. get_permalink($post->ID) . '"> Читати далі...</a>';
	}
	//end
	*/