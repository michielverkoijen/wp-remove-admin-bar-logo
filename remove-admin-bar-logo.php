<?php
/*
Plugin Name: Remove Admin Bar Logo
Description: Removes the WordPress logo and confusing submenu from the WordPress admin bar menu when logged in. This simple plugin does not need any configuration.
Version: 1.0
License: GPL
Author: Voormedia
Author URI: http://voormedia.com/
*/

function remove_wp_admin_link() {
	remove_action('admin_bar_menu', 'wp_admin_bar_wp_menu' );
}

add_action( 'wp_head', 'remove_wp_admin_link' );
add_action( 'admin_init', 'remove_wp_admin_link' );
