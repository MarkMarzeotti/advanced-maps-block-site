<?php
/**
 * Customizer sections.
 *
 * @package Advanced Maps Block
 */

/**
 * Register the section sections.
 *
 * @author WDS
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function amb_site_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'amb_site_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'advanced-maps-block' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a social links section.
	$wp_customize->add_section(
		'amb_site_social_links_section',
		array(
			'title'       => esc_html__( 'Social Media', 'advanced-maps-block' ),
			'description' => esc_html__( 'Links here power the display_social_network_links() template tag.', 'advanced-maps-block' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		)
	);

	// Register a header section.
	$wp_customize->add_section(
		'amb_site_header_section',
		array(
			'title'    => esc_html__( 'Header Customizations', 'advanced-maps-block' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'amb_site_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'advanced-maps-block' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', 'amb_site_customize_sections' );
