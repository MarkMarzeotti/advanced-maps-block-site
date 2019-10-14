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

	<div class="container">
		<main id="main" class="content__main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;
			?>

		</main>
		<?php get_sidebar(); ?>
	</div>

<?php
get_footer();
