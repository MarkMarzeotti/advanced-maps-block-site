<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Maps_Block
 */

?>

<article id="post-<?php the_ID(); ?>">
	<div class="hero">
		<div class="container">
			<header class="hero__title">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</header>
		</div>
	</div>

	<div class="container">
		<div class="content__main">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div>' . esc_html__( 'Pages:', 'advanced-maps-block' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div>
</article>
