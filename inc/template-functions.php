<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Advanced_Maps_Block
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function amb_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'amb_pingback_header' );
