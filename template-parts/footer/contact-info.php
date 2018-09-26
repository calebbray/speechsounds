<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="footer-wrap flex-container">
  <div class="flex-box box-1">
    <h3>Speech Sounds Visualized</h3>
    <img class="app-store" src="http://caleb.develop.test/wp-content/uploads/2018/08/Button_Download-on-the-App-Store.png" alt="app store">
    <p>&copy;<?php echo esc_html( date( 'Y' ) ); ?><br> Pullman Regional Hospital</p>
  </div>
  <div class="flex-box box-2">
    <h4>Social Media</h4>
    <?php

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>
  </div>
  <div class="flex-box box-3">
    <h4>Contact</h4>
    <p><?php echo esc_html(get_theme_mod('primary_email_ssv')); ?></p>
    <p><?php echo esc_html(get_theme_mod('primary_location_ssv')); ?></p>
    <p><?php echo esc_html(get_theme_mod('primary_address_ssv')); ?></p>
    <p><?php echo esc_html(get_theme_mod('primary_city_state_zip_ssv')); ?></p>
  </div>
</div>