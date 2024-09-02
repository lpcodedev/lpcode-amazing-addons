<?php

/**
 * Plugin Name: LPCode Amazing Addons Plugin
 * Description: Amazing addons for Elementor.
 * Plugin URI: https://github.com/lpcodedev/lpcode-flutuante-btn
 * Version:     1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.4
 * Author: lpcode
 * Author URI: https://lpcode.com.br
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: lpcode-amazing-addons 
 * Domain Path: /language
 * Requires Plugins: elementor
 * Elementor tested up to: 3.21.0
 * Elementor Pro tested up to: 3.21.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function lpcode_amazing_addons(){
    
    // Load plugin file
    require_once( __DIR__ . '/includes/plugin.php' );

    // run the plugin
    \Lpcode_Amazing_Addons\Plugin::instance();
}

add_action('plugins_loaded', 'lpcode_amazing_addons');


/*
function register_lpcode_amazing_widgets($widgets_manager){

    // caminho dos widgets
    require_once(__DIR__ . '/widgets/Curve-outside-card/curve-outsite-card-widget.php');

    // registrando o widgets
    $widgets_manager->register(new \Elementor_Curve_Outside_Card_Widget());
}
add_action('elementor/widgets/register', 'register_lpcode_amazing_widgets'); 

*/