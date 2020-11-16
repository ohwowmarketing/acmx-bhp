<?php
//! ===
//! Do not edit anything in this file unless you know what you're doing
//! ===

//* Assets Resources
add_action('wp_enqueue_scripts', function() {

    global $post;

    # UIKit 3
    $v = '3.5.9'; // UIKit Version(s)
    wp_enqueue_style( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@'.$v.'/dist/css/uikit.min.css' );
    wp_enqueue_script( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@'.$v.'/dist/js/uikit.min.js', ['jquery'], null, true );
    wp_enqueue_script( 'uikit-icons', 'https://cdn.jsdelivr.net/npm/uikit@'.$v.'/dist/js/uikit-icons.min.js', null, null, true );

    wp_enqueue_script( 'main', _scripts.'main.min.js', null, null, true );
    // wp_enqueue_script( 'icon', _scripts.'icons.min.js', null, null, true );

    wp_enqueue_style( 'main', _styles.'main.min.css' );

    # Not Found
    if ( is_404() ) {

    }

    # Category
    elseif ( is_category([  ]) ) {

    }

    # Single | Singular
    elseif ( is_single() ) {

        switch ( $post->post_type ) {

        }
        wp_enqueue_style( 'page', _styles.$postName.'.min.css' );

    }

    # Category | Tag
    elseif ( is_category() || is_archive() ) {

        switch ( get_query_var( 'taxonomy' ) ) {
            
        }
        wp_enqueue_style( 'page', _styles.$postName.'.min.css' );

    }

    # Pages
    elseif ( is_page() ) {

        switch ( $post->ID ) {

            case '12': $pageName = 'about'; break;
            case '14': $pageName = 'team'; break;
            case '16': $pageName = 'testimmonials'; break;
            case '18': $pageName = 'news'; break;

            case '20': // for-sale
            case '22': // for-lease
            case '24': // featured-property
            case '26': // major tenants
            case '28': // municipal tenants
                $pageName = 'portfolio'; 
                break;
            
            case '30': $pageName = 'acquisition'; break;
            case '32': $pageName = 'lease'; break;
            
            case '45': // amenities-renovations
                $pageName = 'features'; 
                break;

            case '34': $pageName = 'careers'; break;
            case '36': $pageName = 'contact'; break;
            
            case '3':  // privacy-policy
            case '38': // terms-of-use
            case '41': // sitemap
                $pageName = 'legal'; 
                break;

            default:
                $pageName = "home";
                break; 

        }
        wp_enqueue_style( 'page', _styles.$pageName.'.min.css' );
    }

}, 100);

// Disable WordPress Script & Function
function unnecessary_scripts() {
    // wp_dequeue_script('jquery');
    // wp_deregister_script('jquery');
    wp_dequeue_style('wp-block-library');
}
add_filter( 'wp_enqueue_scripts', 'unnecessary_scripts', PHP_INT_MAX );