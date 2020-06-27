<?php
/**
 * @package Akismet
 */
/*
Plugin Name: footer
Plugin URI: https://akismet.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 4.1.6
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/
?>



<?php
define('RESTRICTED',1);
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
	//parameters details
   //add_management_page( $page_title, $menu_title, $capability,$menu_slug, $function );
  //add a new setting page udner setting menu
 //add_management_page('Footer Text', 'Footer Text', 'manage_options',__FILE__, //'footer_text_admin_page');
//add new menu and its sub menu 
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options','footer_setting_page', 'mt_settings_page','dashicons-welcome-widgets-menus','2');
add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title','manage_options', 'child-submenu-handle');
}

function footer_text_admin_page () {
  echo 'this is where we will edit the variable';
}

// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_settings_page.php');
}
?>


<?php
function your_function() {
   echo "<div style='color: White;
	background-color:#24292E;
	font-size: 22px;
	text-align:center;
    '>".get_option('footer_text')."</div>";
}
add_action( 'wp_footer', 'your_function' );
?>
