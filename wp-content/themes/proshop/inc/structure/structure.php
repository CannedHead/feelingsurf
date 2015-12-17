<?php
/**
 * ProShop structural functions
 *
 * @package proshop
 */

/**
 * Primary navigation wrapper
 * @return void
 */
function p_primary_navigation_wrapper() {
	echo '<section class="p-primary-navigation">';
}

/**
 * Primary navigation wrapper close
 * @return void
 */
function p_primary_navigation_wrapper_close() {
	echo '</section>';
}

/**
 * Secondary navigation wrapper
 * @return void
 */
function p_secondary_navigation_wrapper() {
	echo '<section class="p-secondary-navigation">';
}

/**
 * Secondary navigation wrapper close
 * @return void
 */
function p_secondary_navigation_wrapper_close() {
	echo '</section>';
}

/**
 * Custom markup tweaks
 * @return void
 */
function p_custom_storefront_markup() {
	remove_action( 'storefront_header', 'storefront_secondary_navigation',		30 );
	add_action( 'storefront_header', 'storefront_secondary_navigation',			5 );
	add_action( 'storefront_header', 'p_secondary_navigation_wrapper',			4 );
	add_action( 'storefront_header', 'p_secondary_navigation_wrapper_close',			6 );

	remove_action( 'storefront_header', 'storefront_header_cart',				60 );
	add_action( 'storefront_header', 'storefront_header_cart',					40 );
}
