<?php
/**
 * Display social sharing icons.
 *
 * @package Advanced Maps Block
 */

?>

<div class="social-share">
	<h5 class="social-share-title"><?php esc_html_e( 'Share This', 'advanced-maps-block' ); ?></h5>
	<ul class="social-icons menu menu-horizontal">
		<li class="social-icon">
			<a href="<?php echo esc_url( amb_site_get_twitter_share_url() ); ?>" onclick="window.open(this.href, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, top=150, left=0, width=600, height=300' ); return false;">
				<?php
				amb_site_display_svg(
					array(
						'icon'  => 'twitter-square',
						'title' => __( 'Twitter', 'advanced-maps-block' ),
						'desc'  => esc_html__( 'Share on Twitter', 'advanced-maps-block' ),
					)
				);
				?>
				<span class="screen-reader-text"><?php esc_html_e( 'Share on Twitter', 'advanced-maps-block' ); ?></span>
			</a>
		</li>
		<li class="social-icon">
			<a href="<?php echo esc_url( amb_site_get_facebook_share_url() ); ?>" onclick="window.open(this.href, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, top=150, left=0, width=600, height=300' ); return false;">
				<?php
				amb_site_display_svg(
					array(
						'icon'  => 'facebook-square',
						'title' => __( 'Facebook', 'advanced-maps-block' ),
						'desc'  => esc_html__( 'Share on Facebook', 'advanced-maps-block' ),
					)
				);
				?>
				<span class="screen-reader-text"><?php esc_html_e( 'Share on Facebook', 'advanced-maps-block' ); ?></span>
			</a>
		</li>
		<li class="social-icon">
			<a href="<?php echo esc_url( amb_site_get_linkedin_share_url() ); ?>" onclick="window.open(this.href, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, top=150, left=0, width=475, height=505' ); return false;">
				<?php
				amb_site_display_svg(
					array(
						'icon'  => 'linkedin-square',
						'title' => __( 'LinkedIn', 'advanced-maps-block' ),
						'desc'  => esc_html__( 'Share on LinkedIn', 'advanced-maps-block' ),
					)
				);
				?>
				<span class="screen-reader-text"><?php esc_html_e( 'Share on LinkedIn', 'advanced-maps-block' ); ?></span>
			</a>
		</li>
	</ul>
</div><!-- .social-share -->
