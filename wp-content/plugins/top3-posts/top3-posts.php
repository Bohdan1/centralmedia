<?php
/*
Plugin Name: Top 3 posts
Plugin URI: http://platform-it.com/
Description: надання можливості вручну виводити пости, які будуть відображатися в топ-3
Author URI: http://platform-it.com/
Version: 1.0
*/ 

const TOP3_PLUGIN_ID = 'top3';
const TOP3_PLUGIN_NAME = 'Топ-3 публікації';
//const TOP3_USER_ID_OPTION = 'top3_user_id';
//const TOP3_CLIENT_ID_OPTION = 'top3_client_id';
//const TOP3_ACCESS_TOKEN_OPTION = 'top3_access_token_id';

add_action('admin_menu', 'top3_posts_menu');
function top3_posts_menu() {
	add_menu_page(
		'Налаштування плагіна ' . TOP3_PLUGIN_NAME,
		TOP3_PLUGIN_NAME,
		'edit_dashboard',
		TOP3_PLUGIN_ID,
		'render_top3_settings_page',
		'dashicons-welcome-view-site',
		'4'
	);
}

function render_top3_settings_page() {
	include 'settings.php';
}