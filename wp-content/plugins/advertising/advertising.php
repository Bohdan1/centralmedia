<?php
/*
Plugin Name: Advertising
Plugin URI: http://platform-it.com/
Description: надання можливості виводити рекламу на сайті
Author URI: http://platform-it.com/
Version: 1.0
*/ 

const ADVERTISING_PLUGIN_ID = 'advertising';
const ADVERTISING_PLUGIN_NAME = 'Реклама';

add_action('admin_menu', 'advertising_posts_menu');
function advertising_posts_menu() {
	add_menu_page(
		'Налаштування плагіна ' . ADVERTISING_PLUGIN_NAME,
		ADVERTISING_PLUGIN_NAME,
		8,
		ADVERTISING_PLUGIN_ID,
		'render_advertising_settings_page',
		'dashicons-star-filled',
		'25'
	);
}

function render_advertising_settings_page() {
	include 'settings.php';
}