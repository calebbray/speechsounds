<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-wrap">
				<div>
					<!-- <p><?php //echo esc_html(get_theme_mod('ssv_contact_information')); ?></p>
					<p class="text-center">&copy; <?php //echo esc_html( date( 'Y' ) ); ?> Speech Sounds Visualized</p> -->
					<?php get_template_part( 'template-parts/footer/contact', 'info' ); ?>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
