<?php
/*
Plugin Name: Tarikul Addon For VC
Plugin URI: https://onlytarikul.com
Description: Tab Addon For Visual Page Builder
Version: 1.0
Author: Tarikul Islam
Author URI: https://onlytarikul.com
License: GPLv2 or later
Text Domain: taddon
Domain Path: /languages/
 */

require_once('forntend.php');
function taddon_plugins_loaded() {
    load_plugin_textdomain( 'posts-to-qrcode', false, dirname( __FILE__ ) . "/languages" );
}
add_action( 'plugins_loaded', 'taddon_plugins_loaded' );

/*function wordcount_activation_hook(){}
register_activation_hook(__FILE__,"wordcount_activation_hook");

function wordcount_deactivation_hook(){}
register_deactivation_hook(__FILE__,"wordcount_deactivation_hook");*/

/**
 * Admin Enqueue Script Here
 */

function taddon_assets() {
	wp_enqueue_style( 'bootstrap-css', plugin_dir_url( __FILE__ ) . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'googlefont-css', plugin_dir_url( __FILE__ ) . '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap' );
	wp_enqueue_style( 'style-css', plugin_dir_url( __FILE__ ) . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive-csss', plugin_dir_url( __FILE__ ) . '/assets/css/responive.css' );

    wp_enqueue_script( 'jquery-min.js', plugin_dir_url( __FILE__ ) . '/assets/js/jquery-3.4.1.min.js', array(), false, true );
    wp_enqueue_script( 'bootstrap-js', plugin_dir_url( __FILE__ ) . '/assets/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'custom-js', plugin_dir_url( __FILE__ ) . '/assets/js/custom.js', array(), false, true );
};
add_action( 'get_footer', 'taddon_assets' );

function custom_tab() {
    vc_map(

        array(
            'name'        => __( 'Custom Tab', 'text-donain' ),
            'description' => 'This is Custom tab Addon For VC',
            'base'        => 'maxima_tab',
            'category'    => 'Theme Addon',
            'params'      => array(
                array(
                    'type'       => 'param_group',
                    'param_name' => 'values',
                    'params'     => array(
                        array(
                            'type'        => 'attach_image',
                            'admin_label' => true,
                            'heading'     => __( 'Icon Image', 'taddon' ),
                            'param_name'  => 'icon_image',
                        ),
                        array(
                            'type'        => 'attach_image',
                            'admin_label' => true,
                            'heading'     => __( 'Icon Hover Image', 'taddon' ),
                            'param_name'  => 'hover_image',
                        ),
                        array(
                            'type'       => 'textfield',
                            'name'       => 'icon_text',
                            'heading'    => __( 'Icon Text', 'taddon' ),
                            'param_name' => 'icon_text',
                        ),
                        array(
                            'type'       => 'textfield',
                            'name'       => 'title',
                            'heading'    => __( 'Service Title', 'taddon' ),
                            'param_name' => 'title',
                        ),
                        array(
                            'type'       => 'textarea',
                            'name'       => 'content',
                            'heading'    => __( 'Service Details', 'taddon' ),
                            'param_name' => 'content',
                        ),
                        array(
                            'type'       => 'textfield',
                            'name'       => 'url',
                            'heading'    => __( 'Button URL', 'taddon' ),
                            'param_name' => 'url',
                        ),
                        array(
                            'type'        => 'attach_image',
                            'admin_label' => true,
                            'heading'     => __( 'Servcie Image', 'taddon' ),
                            'param_name'  => 'servcic_image',
                        ),
                    ),

                ),
            ),
        )
    );
}
add_action( 'vc_before_init', 'custom_tab' );

