<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package caniconsulting
 */
?>

			</div><!-- #content -->
		</div><!--.main-page-->
	</div><!--.main-content-area-->
	<div class="footer-area full">
		<div class="main-page container">
			<footer id="colophon" class="site-footer row" role="contentinfo">
				<div class="site-info inner span9">
					<?php printf( __( 'Theme: %1$s by %2$s.', 'cani-consulting' ), 'caniconsulting', '<a href="http://www.caniconsultinggroup.com" rel="designer">Ron Brennan</a>' ); ?>
				</div><!-- .site-info -->
				<div class="copy inner span3">&copy;<?php the_date('Y'); ?></span>
			</footer><!-- #colophon -->
		</div><!--.main-page-->
	</div><!--main-footer area-->
<?php wp_footer(); ?>
</body>
</html>
