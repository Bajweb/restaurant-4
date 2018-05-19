<?php
/*
// Theme Social Media
*/

if( function_exists('get_field') ){
	//google analitics code
	function applyGoogleAnaliticsCode(){  
		the_field( 'google_analitics_code', 'option' );
	}

	// google maps app
	function my_acf_init() {

		$google_map_appy_key = 	get_field('google_map_appy_key', 'option');
		
		acf_update_setting('google_api_key', $google_map_appy_key);
	}
	add_action('acf/init', 'my_acf_init');

	function applyGoogleMap(){  

		$location = get_field('google_map', 'option'); 
		 
		if( !empty($location) ):  echo $location['lat']; echo $location['lng']; ?>
		<div class="acf-map">
			<div  class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
		<?php endif; 

	}
}