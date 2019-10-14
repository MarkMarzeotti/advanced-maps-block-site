<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Advanced_Maps_Block
 */

get_header();
?>

	<div class="container">
		<main id="main" class="content__full-width">

			<section>
				<header>
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'advanced-maps-block' ); ?></h1>
				</header>

				<div>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'advanced-maps-block' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</section>

		</main>
	</div>

<?php
get_footer();
