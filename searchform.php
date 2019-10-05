<?php
/**
 * The template for displaying the search form.
 *
 * @package Advanced Maps Block
 */

?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field">
		<span class="screen-reader-text"><?php esc_html_e( 'To search this site, enter a search term', 'advanced-maps-block' ); ?></span>
		<input class="search-field" id="search-field" type="text" name="s" value="<?php echo get_search_query(); ?>" aria-required="false" autocomplete="off" placeholder="<?php echo esc_attr_e( 'Search', 'advanced-maps-block' ); ?>" />
	</label>
	<input type="submit" id="search-submit" class="button button-search" tabindex="-1" value="<?php esc_attr_e( 'Submit', 'advanced-maps-block' ); ?>" />
</form>
