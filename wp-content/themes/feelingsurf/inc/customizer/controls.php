<?php
/**
 * ProShop Customizer controls
 *
 * @package proshop
 */

/**
 * Set up proshop customizer controls/settings
 */
function p_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'background_color' )->transport 	= 'refresh';

	/**
	 * Primary navigation color
	 */
	$wp_customize->add_setting( 'proshop_navigation_color', array(
		'default'           => apply_filters( 'proshop_default_navigation_color', '#444444' ),
		'sanitize_callback' => 'storefront_sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'proshop_navigation_color', array(
		'label'	   => __( 'Primary navigation link color', 'storefront' ),
		'section'  => 'header_image',
		'settings' => 'proshop_navigation_color',
		'priority' => 40,
	) ) );

	/**
	 * Primary navigation background color
	 */
	$wp_customize->add_setting( 'proshop_navigation_background_color', array(
		'default'           => apply_filters( 'proshop_default_navigation_background_color', '#ffffff' ),
		'sanitize_callback' => 'storefront_sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'proshop_navigation_background_color', array(
		'label'	   => __( 'Primary navigation background color', 'storefront' ),
		'section'  => 'header_image',
		'settings' => 'proshop_navigation_background_color',
		'priority' => 41,
	) ) );
}