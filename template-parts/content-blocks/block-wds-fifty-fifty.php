<?php
/**
 * The template used for displaying fifty/fifty blocks.
 *
 * @package Advanced Maps Block
 */

// Get the block layout field so block template is conditionally loaded.
global $fifty_block, $fifty_alignment, $fifty_classes;
$block_layout    = get_field( 'block_layout' );
$fifty_block     = $block;
$fifty_alignment = amb_site_get_block_alignment( $fifty_block );
$fifty_classes   = amb_site_get_block_classes( $fifty_block );

switch ( $block_layout ) {

	case 'text_media':
		get_template_part( 'template-parts/content-blocks/block', 'wds-fifty-text-media' );
		break;

	case 'media_text':
		get_template_part( 'template-parts/content-blocks/block', 'wds-fifty-media-text' );
		break;

	case 'text_text':
		get_template_part( 'template-parts/content-blocks/block', 'wds-fifty-text-only' );
		break;

	default:
		get_template_part( 'template-parts/content-blocks/block', 'wds-fifty-text-media' );
}


