<?php
/**
 * The template used for displaying a CTA block.
 *
 * @package Advanced Maps Block
 */

// Set up fields.
$block_title = get_field( 'title' );
$text        = get_field( 'text' );
$alignment   = amb_site_get_block_alignment( $block );
$classes     = amb_site_get_block_classes( $block );

// Start a <container> with possible block options.
amb_site_display_block_options(
	array(
		'block'     => $block,
		'container' => 'aside', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block cta-block' . esc_attr( $alignment . $classes ), // Container class.
	)
);
?>
	<div class="container display-flex align-center">
		<header>
			<?php if ( $block_title ) : ?>
				<h1 class="cta-title"><?php echo esc_html( $block_title ); ?></h1>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<h2 class="cta-text"><?php echo esc_html( $text ); ?></h2>
			<?php endif; ?>
		</header>

		<?php
		amb_site_display_link(
			array(
				'button' => true,
				'class'  => 'button-cta',
			)
		);
		?>
	</div>
</aside>
