<?php
//! ===
//! Do not edit anything in this file unless you know what you're doing
//! ===

//* Setup ACMX Theme
add_action('after_setup_theme', function() {

    //* Soil
    //* @link https://roots.io/plugins/soil/
    add_theme_support('soil', 'clean-up');
    add_theme_support('soil', 'disable-rest-api');
    add_theme_support('soil', 'disable-asset-versioning');
    add_theme_support('soil', 'disable-trackbacks');
    add_theme_support('soil', 'js-to-footer');
    add_theme_support('soil', 'nav-walker');
    add_theme_support('soil', 'nice-search');
    // add_theme_support('soil', 'relative-urls');


    //* Theme
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['caption', 'search-form']);


    //* Editor
    add_editor_style(  _styles.'wp-editor.css' );

    //* Additional Size

    //* Menu
    register_nav_menus([
        'Main Menu'     => __( 'Menu Navigation', 'acmx-sgg' ),
        'Footer Menu'   => __( 'Footer Navigation', 'acmx-sgg' ),
        'Mobile Menu'   => __( 'Mobile Navigation', 'acmx-sgg' )
    ]);

});

//* Content Width
if ( ! isset( $content_width ) ) {
    $content_width = 1280;
}

//* Register Sidebar
function custom_sidebar() {

}
add_action( 'widgets_init', 'custom_sidebar' );