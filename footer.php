<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Advanced_Maps_Block
 */

?>

	</div>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="footer__copyright">
				<?php $amb_date = gmdate( 'Y' ); ?>
				<p>&copy; <?php echo esc_html( $amb_date ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
			</div>

			<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
				<nav class="footer__nav nav">
					<?php
					wp_nav_menu(
						array(
							'container'      => false,
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'nav__level',
							'theme_location' => 'footer-menu',
							'walker'         => new AMB_Walker_Nav_Menu(),
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
