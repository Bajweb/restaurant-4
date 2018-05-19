<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bajweb
 */
?>
	</div><!-- #wrap-primary-secondary -->

<?php if( function_exists( 'get_field' ) ){
	$footer_front_page = get_field( 'footer_front_page', 'option' );
?>
	<footer id="colophon" class="site-footer section">
			<div class="footer-info">

			<?php if($footer_front_page['display_footer_description'] == true ){
				if( function_exists( 'applayFooterDescription' ) ){
					applayFooterDescription();
				}
			} ?>

			<?php if($footer_front_page['display_coppyright'] == true ){
				if( function_exists( 'applayCopypright' ) ){
					applayCopypright();
				}
			} ?>
		</div><!-- .footer-info -->
	</footer><!-- #colophon -->

</div><!-- #main-container -->
<?php }
wp_footer(); ?>
<?php /*google analitics code*/ 
	if( function_exists('applyGoogleAnaliticsCode') ){
		applyGoogleAnaliticsCode(); 
	} ?>
</body>
</html>

	
