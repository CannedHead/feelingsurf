<?php

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css' );
}
add_action('wp_enqueue_scripts',  'theme_styles');

function theme_js() {

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'library-1-10-2_js', get_template_directory_uri() . '/js/library-1-10-2.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
    wp_enqueue_script( 'fitvids_js', get_template_directory_uri() . '/js/fitvids.js', array('jquery'), '', true );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts',  'theme_js');


/*BREADCRUMB*/
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'wrap_before' => '<ol class="breadcrumb" itemprop="breadcrumb">',
            'wrap_after' => '</ol>',
            'before'      => '<li>',
            'after'       => '</li>',
            'home'        => _x( 'Inicio', 'breadcrumb', 'woocommerce' ),
        );
}

require get_template_directory() . '/inc/init.php';



