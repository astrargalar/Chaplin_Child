<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'chaplin-style','chaplin-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 9999 );

// Connect Child Theme and Parent Theme

function chaplin_child_enqueue_styles() {

$parent_style = 'chaplin-style';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'chaplin-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', false, 1.0, 'all' );
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));

}
add_action( 'wp_enqueue_scripts', 'chaplin_child_enqueue_styles' );

// END ENQUEUE PARENT ACTION
