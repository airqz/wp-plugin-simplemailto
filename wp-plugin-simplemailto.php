<?php
/*
Plugin Name: simple click mailto icon
Description: Simple icon and click to send email with mailto ( position:fixed;left: 5px;)
Version: 1
Author: airqz
*/

function WP_mailto_btn() {
  $info = '<a href="mailto:?to=john@doe.com" class="mailto">
  <img src="'.plugins_url( "wp-plugin-simplemailto/assets/img/mailto.png" ).'" alt="mailto">
</a>';
echo $info;
}
add_action( 'wp_footer', 'WP_mailto_btn' );

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'swp_register_plugin_styles' );

/**
 * Register style sheet.
 */
function swp_register_plugin_styles() {
	wp_register_style( 'wp-plugin-simplemailto-style', plugins_url( 'wp-plugin-simplemailto/assets/css/plugin.css' ) );
	wp_enqueue_style( 'wp-plugin-simplemailto-style' );
}