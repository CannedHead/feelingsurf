<?php
/**
 * ProShop setup functions
 *
 * @package proshop
 */

/**
 * Assign the ProShop version to a var
 */
$theme 		= wp_get_theme( 'proshop' );
$p_version 	= $theme['Version'];

/**
 * Enqueue Storefront Styles
 * @return void
 */
function p_enqueue_styles() {
	global $storefront_version;
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', $storefront_version );
}

/**
 * Enqueue Bootique Styles
 * @return void
 */
function p_enqueue_child_styles() {
	global $p_version;

    wp_enqueue_style( 'p-style', get_stylesheet_uri(), array( 'storefront-style' ), $p_version );
    wp_enqueue_style( 'droid-sans', '//fonts.googleapis.com/css?family=Droid+Sans:400,700', array( 'p-style' ) );

    wp_enqueue_style( 'exo-2', '//fonts.googleapis.com/css?family=Exo+2:800italic', array( 'p-style' ) );
    wp_enqueue_style( 'oswald', '//fonts.googleapis.com/css?family=Oswald', array( 'p-style' ) );
    wp_enqueue_style( 'ubuntu-mono', '//fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic', array( 'p-style' ) );

    wp_enqueue_script( 'proshop', get_stylesheet_directory_uri() . '/js/proshop.min.js', array( 'jquery' ), '1.0' );
}

/**
 * Sets the default header image
 */
function p_custom_header_defaults( $args ) {
    $args['default-image']  = get_stylesheet_directory_uri() . '/images/header.jpg';
    $args['height']         = 1000;

	return $args;
}

/**
 * Wrap homepage section titles inside a `span`.
 * @param  array $args homepage section arguments
 * @return array       homepage section arguments
 */
function proshop_homepage_section_title( $args ) {
    $storefront             = wp_get_theme( 'storefront' );
    $storefront_version     = $storefront['Version'];

    // Only set the title if the storefront version is greater than 1.4.5
    if ( version_compare( $storefront_version, '1.4.5' ) == 1 ) {
        $title          = $args['title'];
        $args['title']  = '<span>' . $title . '</span>';
    }

    return $args;
}