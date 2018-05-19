<?php
/*
// Header Background Image
*/

if( function_exists( 'get_field' ) ){ 

	function applayHeaderBackgroundImage(){ 
		$bg_image = get_field('header_background_image', 'option');
		$display_header_image = get_field('display_header_image', 'option');
		$header_image_features = get_field('header_image_features', 'option'); ?>

		<?php if( $display_header_image == true ): ?>

			<div class="site-image-branding" style="background-image:linear-gradient(rgba(<?php echo $header_image_features['bg_color_opacity'] ?>,<?php echo $header_image_features['bg_opacity'] ?>), rgba(<?php echo $header_image_features['bg_color_opacity'] ?>, <?php echo $header_image_features['bg_opacity'] ?>)), url(<?php echo $bg_image; ?>) ;">&nbsp;</div>

		<?php endif; ?>

	<?php }

} 