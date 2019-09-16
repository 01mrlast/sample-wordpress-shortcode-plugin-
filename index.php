<?php
/**
 * @package Your Plugin Name
 */
/*
Plugin Name: Your Plugin Name
Plugin URI: https://mrlast.com/
Description: Your Plugin Name 
Version: 1.0
Author: Samson last
Author URI: https://mrlast.com/
License: GPLv2 or later
Text Domain: Your Plugin Name
*/
add_action('admin_menu', 'plugin_admin_add_page');
function plugin_admin_add_page() {
  add_options_page('Your Plugin Name', 'Your Plugin Name', 'manage_options', 'page_slug', 'plugin_options_page'); 
}
function plugin_options_page() {
    //HTML and PHP for Plugin Admin Page
    echo "<h2>Your Plugin Name</h2>";
}
function wp_function($atts) {
	
	$Content = '<h3>Your Plugin Name Title </h3>' .$atts;
	 
    return $Content;
}
 
add_shortcode('your-shortcode', 'wp_function');
