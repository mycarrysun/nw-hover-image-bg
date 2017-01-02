<?php
/*
Plugin Name: Hover Image w/ Text
Plugin URI: http://nextwebtoday.com
Description: Cornerstone element that changes the background of the element's section on hover.
Version: 1.0
Author: Mike Harrison
Author URI: http://github.com/mycarrysun
License: GPLv2
*/

define( 'NW_HIB_PATH', plugin_dir_path( __FILE__ ) );
define( 'NW_HIB_URL', plugin_dir_url( __FILE__ ) );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//exit if cornerstone is not active
if ( ! is_plugin_active( 'cornerstone/cornerstone.php' ) ) {
	return;
}

add_action( 'cornerstone_register_elements', 'load_cornerstone_element_nw_hover_image_bg' );
function load_cornerstone_element_nw_hover_image_bg()
{

	cornerstone_register_element( 'NW_Hover_Image_Bg', 'nw-hover-image-bg', NW_HIB_PATH . 'cornerstone/elements/nw-hover-image-bg' );
}

add_action( 'wp_enqueue_scripts', 'nw_hib_enqueue_scripts' );
function nw_hib_enqueue_scripts()
{

	wp_enqueue_style(
		'nw-hib',
		NW_HIB_URL . 'styles/css/styles.css'
	);

	wp_enqueue_script(
		'nw-hib',
		NW_HIB_URL . 'js/nw-hover-image-bg.min.js',
		[ 'jquery' ]
	);

}