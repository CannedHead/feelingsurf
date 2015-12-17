<?php
/**
 * General setup hooks and filters
 *
 * @package proshop
 */

/**
 * Styles / scripts
 */
add_action( 'wp_enqueue_scripts', 'p_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'p_enqueue_child_styles', 999 );

/**
 * Extension integrations / tweaks
 */
add_action( 'customize_register', 	'p_customize_storefront_extensions', 99 );
add_action( 'after_switch_theme', 	'p_set_theme_mods' );
add_action( 'wp',					'p_storefront_woocommerce_customiser', 99 );

/**
 * Filters
 */
add_filter( 'storefront_custom_header_args', 'p_custom_header_defaults' );
add_filter( 'storefront_product_categories_args', 'proshop_homepage_section_title', 999 );
add_filter( 'storefront_featured_products_args', 'proshop_homepage_section_title', 999 );
add_filter( 'storefront_recent_products_args', 'proshop_homepage_section_title', 999 );
add_filter( 'storefront_popular_products_args', 'proshop_homepage_section_title', 999 );
add_filter( 'storefront_on_sale_products_args', 'proshop_homepage_section_title', 999 );
