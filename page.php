<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Maps_Block
 */

get_header();
?>

	<main id="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

	</main>
	<?php get_sidebar(); ?>

<?php
get_footer();
