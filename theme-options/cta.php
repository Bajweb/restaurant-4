<?php
/*
// C T A
*/
if( function_exists( 'get_field' ) ){

	function applayHeaderCta(){

		$cta = get_field('cta', 'option'); ?>

		<a href="<?php echo $cta['cta_link'] ?>" class="cta"><?php echo $cta['cta_text'] ?></a>

	<?php }

}