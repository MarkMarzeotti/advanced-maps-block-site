<?php
/**
 * Template part for displaying posts
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
				<?php
				if ( is_singular() ) :
					the_title( '<h1>', '</h1>' );
				else :
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div>
						<?php
						amb_posted_on();
						amb_posted_by();
						?>
					</div>
				<?php endif; ?>
			</header>
		</div>
	</div>

	<div class="container">
		<div class="content__main">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'advanced-maps-block' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);

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
