<?php
/**
 * Enqueue scripts and styles.
 */
function bajweb_theme_options_style() { 

if( function_exists('get_field') ){	

	$google_fonts = get_field('google_fonts', 'option') ;
	$cta = get_field('cta', 'option');
	$bg_color = get_field('background_color', 'option');
	$brending_items_color = get_field('brending_items_color', 'option'); ?>

	<style type="text/css">

		/* body background Image setup */
		body{
			font-family: <?php echo $google_fonts['google_font_name']; ?> !important;
			background-color: <?php echo $bg_color; ?> !important;
		}

		/* cta button */
		.cta{
			color: <?php echo $cta['cta_text_color'] ?> !important;
			background-color: <?php echo $cta['cta_bg_color'] ?> !important;
		}

		/*brending items text color*/
		.brand-item,
		.brand-item a{
			color:  <?php echo $brending_items_color ?> ;
		}
		
	</style>
<?php } }
add_action( 'wp_enqueue_scripts', 'bajweb_theme_options_style' );
