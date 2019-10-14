<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Advanced_Maps_Block
 */

?>

<article id="post-<?php the_ID(); ?>">
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php
			amb_posted_on();
			amb_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<div>
		<?php the_excerpt(); ?>
	</div>
</article>
