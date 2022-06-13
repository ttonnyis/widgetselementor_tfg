<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/oembed-widget.php' );



	$widgets_manager->register( new \Elementor_oEmbed_Widget() );




}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );
