<?php
/* Plugin Name: Jacurtis Shortcodes
Plugin URI: http://jacurtis.com/jac-shortcodes-plugin
Description: All the basic shortcodes you could ever dream of having, in one convenient plugin.
Version: 1.0
Author: J. Alexander Curtis
Author URI: http://jacurtis.com/
License: GPLv2 or later
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// ACTIVATION PROCEDURES ---------------------
// -------------------------------------------
function jac_shortcodes_activation() {
}
register_activation_hook(__FILE__, 'jac_shortcodes_activation');



// DEACTIVATION PROCEDURES ---------------------
// ---------------------------------------------
function jac_shortcodes_deactivation() {
}
register_deactivation_hook(__FILE__, 'jac_shortcodes_deactivation');


// ADD STYLESHEETS ----------------------------
// ---------------------------------------------
function jac_add_styles() {
	wp_register_style( 'jac-shortcodes-styles', plugins_url( '/css/jac-shortcode-styles.css', __FILE__ ), array(), '20151207', 'all' );
	wp_enqueue_style( 'jac-shortcodes-styles' );
}
add_action( 'wp_enqueue_scripts', 'jac_add_styles' );




// WELL SHORTCODE ---------------------
// ------------------------------------
function well_func( $atts, $content = null ){
	$a = shortcode_atts( array(
		'class'	=> '',
		'dark' => ''
		), $atts);

	$isDark = isset($a['dark']) && $a['dark'] == 'true' ? true : false;
	return '<div class="jac-well ' . $a["class"] . ($isDark == true ? 'dark-well' : '') . '">' . '<pre>' . trim($content, " \n\r\0\x0B") . '</pre></div>';
	
}
add_shortcode( 'well', 'well_func' );



// INLINE CODE SHORTCODE ---------------------
// ------------------------------------
function inline_code_func( $atts, $content = null ){
	$a = shortcode_atts( array(
		'class'	=> ''
		), $atts);
	return '<span class="jac-inline-code ' . $a["class"] . '">' . trim($content, " \n\r\0\x0B") . '</span>';
	
}
add_shortcode( 'inline', 'inline_code_func' );



// HIGHLIGHT SHORTCODE ---------------------
// -----------------------------------------
function highlight_func( $atts, $content = null ){
	$a = shortcode_atts( array(
		'color'	=> '#fff2d0'
		), $atts);
	return '<span style="background-color:'.$a['color'].';">'. $content . '</span>';
	
}
add_shortcode( 'highlight', 'highlight_func' );