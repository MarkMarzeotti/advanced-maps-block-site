<?php
/**
 * Advanced Maps Block functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Advanced_Maps_Block
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function amb_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
	load_theme_textdomain( 'advanced-maps-block', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head.
	 */
	add_theme_support( 'automatic-feed-links' );

	/*
		* Enable the title tag controlled by WordPress.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
		* Register menu locations.
		*
		* @link https://developer.wordpress.org/reference/functions/register_nav_menus/
		*/
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'advanced-maps-block' ),
			'button-menu'  => esc_html__( 'Button Menu', 'advanced-maps-block' ),
			'footer-menu'  => esc_html__( 'Footer Menu', 'advanced-maps-block' ),
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	/**
	 * Add support for wide and full width blocks.
	 */
	add_theme_support( 'align-wide' );

	/**
	 * Add various image sizes.
	 */
	add_image_size( 'share-facebook', 1200, 630, true );
	add_image_size( 'share-twitter', 1024, 512, true );

	/**
	 * Add a custom color pallete
	 */
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Black', 'advanced-maps-block' ),
			'slug'  => 'black',
			'color'	=> '#000000',
		),
		array(
			'name'  => __( 'Ebony', 'advanced-maps-block' ),
			'slug'  => 'ebony',
			'color' => '#131333',
		),
		array(
			'name'  => __( 'Mirage', 'advanced-maps-block' ),
			'slug'  => 'mirage',
			'color' => '#1c233c',
		),
		array(
			'name'  => __( 'White', 'advanced-maps-block' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Athens Gray', 'advanced-maps-block' ),
			'slug'  => 'athens-gray',
			'color' => '#f9f9fa',
		),
		array(
			'name'  => __( 'Gallery', 'advanced-maps-block' ),
			'slug'  => 'gallery',
			'color' => '#eeeeee',
		),
		array(
			'name'  => __( 'Cornflower Blue', 'advanced-maps-block' ),
			'slug'  => 'cornflower-blue',
			'color' => '#7280ff',
		),
		array(
			'name'  => __( 'Comet', 'advanced-maps-block' ),
			'slug'  => 'comet',
			'color' => '#626981',
		),
		array(
			'name'  => __( 'Froly', 'advanced-maps-block' ),
			'slug'  => 'froly',
			'color' => '#f15f73',
		),
		array(
			'name'  => __( 'Yellow Orange', 'advanced-maps-block' ),
			'slug'  => 'yellow-orange',
			'color' => '#feb633',
		),
	) );
}
add_action( 'after_setup_theme', 'amb_setup' );

/**
 * Remove emoji styles.
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Disable comment feeds.
 */
function amb_disable_comments_feed() {
	/* translators: %s: homepage url */
	wp_die( sprintf( __( 'No feed available, please visit the <a href="%s">homepage</a>!', 'advanced-maps-block' ), esc_url( home_url( '/' ) ) ) ); // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
}
add_action( 'do_feed_rss2_comments', 'amb_disable_comments_feed', 1 );
add_action( 'do_feed_atom_comments', 'amb_disable_comments_feed', 1 );
add_filter( 'feed_links_show_comments_feed', '__return_false' );

/**
 * Enqueue front end scripts and styles.
 */
function amb_front_end_assets() {
	wp_enqueue_style( 'amb-style', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'amb-script', get_stylesheet_directory_uri() . '/dist/js/app.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	wp_localize_script(
		'amb-script',
		'ambGlobal',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'amb_more_post_ajax_nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'amb_front_end_assets' );

/**
 * Enqueue admin scripts and styles.
 */
function amb_admin_assets() {
	wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'admin-script', get_stylesheet_directory_uri() . '/dist/js/admin.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'admin_enqueue_scripts', 'amb_admin_assets' );

/**
 * Enqueue scripts and styles used on both front end and admin.
 */
function amb_assets() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|Rubik:500,700', array(), '20191005' );
}
add_action( 'wp_enqueue_scripts', 'amb_assets' );
add_action( 'admin_enqueue_scripts', 'amb_assets' );

/**
 * Dequeue block editor base styles.
 */
function amb_dequeue_styles() {
	wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'amb_dequeue_styles', 100 );

/**
 * Add additional file extensions.
 *
 * @param array $mime_types An array of file types allowed.
 */
function amb_add_mime_types( $mime_types ) {
	$mime_types['svg'] = 'image/svg+xml';
	return $mime_types;
}
add_filter( 'upload_mimes', 'amb_add_mime_types', 1, 1 );

/**
 * Remove WordPress base menu classes.
 *
 * @param array  $classes An array of classes for this menu item.
 * @param object $item    The post object for the menu item.
 */
function amb_discard_menu_classes( $classes, $item ) {
	return (array) get_post_meta( $item->ID, '_menu_item_classes', true );
}
add_filter( 'amb_nav_menu_css_class', 'amb_discard_menu_classes', 10, 2 );

/**
 * Set number of words to show in the excerpt.
 *
 * @param int $length Allowed length of the excerpt.
 */
function amb_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'amb_excerpt_length', 999 );

/**
 * Set characters to show after excerpt.
 *
 * @param string $more The text to display at the end of a generated excerpt.
 */
function amb_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'amb_excerpt_more' );

/**
 * Call more posts on posts page.
 */
function amb_more_post_ajax() {
	check_ajax_referer( 'amb_more_post_ajax_nonce' );
	$return = wp_unslash( $_POST ); // phpcs:ignore WordPress.VIP.SuperGlobalInputUsage.AccessDetected
	$offset = sanitize_key( $return['offset'] );
	$ppp    = sanitize_key( $return['ppp'] );

	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $ppp,
		'offset'         => $offset,
	);

	$query = new WP_Query( $args );
	while ( $query->have_posts() ) :
		$query->the_post();
		get_template_part( 'template-parts/content' );
	endwhile;
	exit;
}
add_action( 'wp_ajax_amb_more_post_ajax', 'amb_more_post_ajax' );
add_action( 'wp_ajax_nopriv_amb_more_post_ajax', 'amb_more_post_ajax' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * A custom walker class to modify the navigation markup.
 */
require get_template_directory() . '/inc/class-amb-walker-nav-menu.php';
