<?php
/**
 * General setup hooks and filters
 *
 * @package proshop
 */

/**
 * Add ProShop specific CSS selectors based on customizer settings
 */
add_action( 'wp_enqueue_scripts', 								'p_add_customizer_css', 1000 );

/**
 * Customizer controls
 */
add_action( 'customize_register', 								'p_customize_register' );

/**
 * Customizer default color tweaks
 */
add_filter( 'storefront_default_footer_heading_color', 			'p_color_white' );

add_filter( 'storefront_default_header_background_color', 		'p_color_mountain_blue' );
add_filter( 'storefront_default_footer_background_color', 		'p_color_charcoal' );

add_filter( 'storefront_default_header_link_color', 			'p_color_white' );
add_filter( 'storefront_default_header_text_color', 			'p_color_white' );

add_filter( 'storefront_default_footer_link_color', 			'p_color_white' );

add_filter( 'storefront_default_heading_color', 				'p_color_dark_grey' );
add_filter( 'storefront_default_text_color', 					'p_color_asphalt' );
add_filter( 'storefront_default_footer_text_color', 			'p_color_english_winter' );

add_filter( 'storefront_default_accent_color', 					'p_color_blue' );

add_filter( 'storefront_default_background_color', 				'p_color_background' );

add_filter( 'storefront_default_button_alt_background_color', 	'p_color_red' );
add_filter( 'storefront_default_button_alt_text_color', 		'p_color_white' );

add_filter( 'storefront_default_button_background_color', 		'p_color_mountain_blue' );
add_filter( 'storefront_default_button_text_color', 			'p_color_white' );

/**
 * Custom background
 */
add_filter( 'storefront_custom_background_args', 				'p_background' );