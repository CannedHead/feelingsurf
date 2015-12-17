<?php
/**
 * ProShop custom selectors that adopt Storefront customizer settings
 *
 * @package proshop
 */

/**
 * Add custom CSS based on settings in Storefront core
 * @return void
 */
function p_add_customizer_css() {
	$primary_nav_color 				= storefront_sanitize_hex_color( get_theme_mod( 'proshop_navigation_color', '#444444' ) );
	$primary_nav_bg_color 			= storefront_sanitize_hex_color( get_theme_mod( 'proshop_navigation_background_color', '#ffffff' ) );
	$header_link_color 				= storefront_sanitize_hex_color( get_theme_mod( 'storefront_header_link_color', apply_filters( 'storefront_default_header_link_color', '#ffffff' ) ) );
	$header_background_color 		= storefront_sanitize_hex_color( get_theme_mod( 'storefront_header_background_color', apply_filters( 'storefront_default_header_background_color', '#2c2d33' ) ) );
	$header_text_color 				= storefront_sanitize_hex_color( get_theme_mod( 'storefront_header_text_color', apply_filters( 'storefront_default_header_text_color', '#9aa0a7' ) ) );
	$accent_color 			 		= storefront_sanitize_hex_color( get_theme_mod( 'storefront_accent_color', apply_filters( 'proshop_default_accent_color', '#00a5bf' ) ) );
	$content_bg_color				= storefront_sanitize_hex_color( get_theme_mod( 'sd_content_background_color' ) );
	$content_frame 					= get_theme_mod( 'sd_fixed_width' );

	if ( $content_bg_color && 'true' == $content_frame && class_exists( 'Storefront_Designer' ) ) {
		$bg_color 	= str_replace( '#', '', $content_bg_color );
	} else {
		$bg_color	= get_theme_mod( 'background_color', apply_filters( 'proshop_default_bg_color', 'e8e8e8' ) );
	}

	$button_alt_background_color 	= storefront_sanitize_hex_color( get_theme_mod( 'storefront_button_alt_background_color', apply_filters( 'proshop_default_button_alt_background_color', '#d84b2f' ) ) );
	$button_alt_text_color 			= storefront_sanitize_hex_color( get_theme_mod( 'storefront_button_alt_text_color', apply_filters( 'proshop_default_button_alt_text_color', '#ffffff' ) ) );

	$style = '
		.p-primary-navigation,
		.main-navigation ul.menu ul,
		.sticky-wrapper,
		.sd-sticky-navigation,
		.sd-sticky-navigation:before,
		.sd-sticky-navigation:after,
		.main-navigation ul.nav-menu ul {
			background-color: ' . $primary_nav_bg_color . ' !important;
		}

		.main-navigation ul.nav-menu .smm-active ul {
			background-color: transparent !important;
		}

		.main-navigation ul li a {
			color: ' . $primary_nav_color .';
		}

		.main-navigation ul li.smm-active li a {
			color: ' . $header_link_color . ';
		}

		.main-navigation ul li.smm-active li ul.products li.product h3 {
			color: ' . $header_text_color . ';
		}

		.main-navigation li.current-menu-item > a,
		.main-navigation ul li a:hover {
			color: ' . storefront_adjust_color_brightness( $primary_nav_color, 50 ) . ' !important;
		}

		ul.products li.product.product-category h3 {
			background-color: ' . $button_alt_background_color . ';
		}

		ul.products li.product.product-category:hover h3 {
			background-color: ' . storefront_adjust_color_brightness( $button_alt_background_color, -15 ) . ';
		}

		ul.products li.product.product-category h3,
		ul.products li.product.product-category h3 mark {
			color: ' . $button_alt_text_color . ';
		}

		.storefront-product-section .section-title span,
		.storefront-product-section .section-title span:before,
		.storefront-product-section .section-title span:after,
		#respond {
			background-color: ' . storefront_adjust_color_brightness( $bg_color, 10 ) . ';
		}

		.storefront-product-section .section-title span:before,
		.storefront-product-section .section-title span:after,
		.storefront-product-section .section-title span,
		.widget-area .widget:before,
		.widget-area .widget:after,
		.widget-area .widget {
			border-color: ' . storefront_adjust_color_brightness( $bg_color, 18 ) . '
		}

		.widget-area .widget,
		.widget-area .widget:before,
		.widget-area .widget:after {
			background-color: ' . storefront_adjust_color_brightness( $bg_color, 10 ) . ';
		}

		ul.products li.product img,
		ul.products li.product .price,
		ul.products li.product .price:after,
		.single-product .images img,
		input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], textarea, .input-text {
			background-color: ' . storefront_adjust_color_brightness( $bg_color, 15 ) . ';
		}

		ul.products li.product .price:before {
			border-left-color: ' . storefront_adjust_color_brightness( $bg_color, 15 ) . ';
		}

		.woocommerce-active .site-header .site-search input[type=search] {
			box-shadow: 0 0 0 3px ' . $accent_color . ';
		}

		.woocommerce-active .site-header .site-search .widget_product_search form:before {
			color: ' . $header_link_color . ';
		}

		.smm-mega-menu {
			background-color: ' . $header_background_color . ';
		}

		@media screen and (min-width: 768px) {
			.p-primary-navigation {
				border-top-color: ' . $header_background_color . ';
			}

			.woocommerce-active .site-header .site-header-cart a.cart-contents:after,
			.woocommerce-active .site-header .site-search .widget_product_search form:before,
			.widget-area .widget .widget-title:after,
			.main-navigation ul.menu li.current-menu-item > a:before,
			.main-navigation ul.nav-menu li.current-menu-item > a:before {
				background-color: ' . $accent_color . ';
			}

			.woocommerce-active .site-header .site-header-cart a.cart-contents:hover:after {
				background-color: ' . storefront_adjust_color_brightness( $accent_color, 5 ) . ';
			}

			.storefront-product-section.storefront-product-categories .columns-3 ul.products li.product:after,
			.storefront-product-section.storefront-product-categories .columns-3 ul.products li.product:before {
				background-color: #' . $bg_color . ';
				background-image: url(' . get_background_image() . ');
			}

			.site-header-cart .widget_shopping_cart a.button {
				background-color: ' . storefront_adjust_color_brightness( $header_background_color, -15 ) . ';
			}
		}
		';

	wp_add_inline_style( 'p-style', $style );
}

/**
 * Proshop background settings
 * @return array $args the modified args.
 */
function p_background( $args ) {
	$args['default-image'] 		= get_stylesheet_directory_uri() . '/images/texture.png';
	$args['default-attachment'] = 'fixed';

	return $args;
}

