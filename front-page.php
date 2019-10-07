<?php
/**
 * The template for displaying the homepage.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marzeotti_Base
 */

get_header();
?>

	<div class="hero">
		<div class="container">
			<div class="hero__content">
				<h1>The easy to use Google Maps block for Gutenberg</h1>
			</div>
			<div class="hero__video">
				<div class="hero__video-container">
					<button class="hero__play-button">Play Video</button>
				</div>
				<svg width="200" height="300" viewBox="0 0 200 300">
					<?php
					for ( $i = 1; $i < 7; $i++ ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
						for ( $ii = 1; $ii < 13; $ii++ ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
							?>
							<circle cx="<?php echo esc_attr( $i * 28 ); ?>" cy="<?php echo esc_attr( $ii * 28 ); ?>" r="4" fill="#ffffff" opacity="0.2" />
							<?php
						}
					}
					?>
				</svg>
			</div>
		</div>
	</div>

	<div class="container">
		<main id="main" class="content__blocks">

			<?php
			while ( have_posts() ) :
				the_post();

				the_content();

			endwhile;
			?>

		</main>
	</div>

<?php
get_footer();
