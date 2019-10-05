<?php
/**
 * Customizer panels.
 *
 * @package Advanced Maps Block
 */

/**
 * Add a custom panels to attach sections too.
 *
 * @author WDS
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function amb_site_customize_panels( $wp_customize ) {

	// Register a new panel.
	$wp_customize->add_panel(
		'site-options',
		array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'Site Options', 'advanced-maps-block' ),
			'description'    => esc_html__( 'Other theme options.', 'advanced-maps-block' ),
		)
	);
}
add_action( 'customize_register', 'amb_site_customize_panels' );
