<?php
/*
Plugin Name: epec-custom-palette
Plugin URI: 
Description: Un plugin d'introduction pour le site de Tony LE
Version: 0.1
Author: Tony LE
Author URI: http://localhost:8888/Wordpress
License: GPL2
*/

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'brand-color-1',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand Color 2', 'epec-custom-palette' ),
            'slug' => 'brand-color-2',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'Very Dark Gray', 'epec-custom-palette' ),
            'slug' => 'very-dark-gray',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'White', 'epec-custom-palette' ),
            'slug' => 'white',
            'color' => '#FFFFFF',
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );         
function my_scripts() {
  
    wp_register_style( 'prefix-style', plugins_url('app.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
    }
    add_action('wp_enqueue_scripts','my_scripts');
    ?>