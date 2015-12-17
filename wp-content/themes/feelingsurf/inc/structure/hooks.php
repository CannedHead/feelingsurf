<?php
/**
 * ProShop structural hooks and filters
 *
 * @package proshop
 */

/**
 * Layout
 */
add_action( 'storefront_header', 'p_primary_navigation_wrapper', 45 );
add_action( 'storefront_header', 'p_primary_navigation_wrapper_close', 65 );

add_action( 'init', 'p_custom_storefront_markup' );