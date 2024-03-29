<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Maps_Block
 */

get_header();
?>

	<div class="container">
		<main id="main" class="content__main">

			<?php if ( have_posts() ) : ?>

				<header>
					<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<p>', '</p>' );
					?>
				</header>

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

			endif;
				?>

		</main>
		<?php get_sidebar(); ?>
	</div>

<?php
get_footer();
