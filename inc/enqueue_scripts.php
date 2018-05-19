<?php
/**
 * Enqueue scripts and styles.
 */
function bajweb_scripts() {
	/*********** B O O T S T R A P *************/
	// popper js
	wp_enqueue_script( 'bajweb-popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '20171215', true );
	// bootstrap js
	wp_enqueue_script( 'bajweb-bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"', array('jquery'), '20171215', true );
	// bootstrap css
	wp_enqueue_style( 'bajweb-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	
	/*********** C S S*************/
	//main style
	wp_enqueue_style( 'bajweb-style', get_stylesheet_uri() );
	// include sass file
	wp_enqueue_style( 'bajweb-custom', get_template_directory_uri() . '/css/custom-editor-style.css' );
	// include google fonts
	if(function_exists( 'get_field' )){
		$google_fonts = get_field('google_fonts', 'option') ;
	wp_enqueue_style( 'google-fonts', $google_fonts['google_font_link'] );
	}

	/*********** J S *************/
	// jq
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	// skip-link-focus-fix
	wp_enqueue_script( 'bajweb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
	//Paralax Skrollr
    wp_enqueue_script( 'bajweb-skrollr', get_template_directory_uri() . '/js/skrollr.min.js', '20151001', true);
    //font awesome
    wp_enqueue_script( 'bajweb-font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', '20151001', true);
    //Paginaton plugin slider
    wp_enqueue_script( 'bajweb-slider', get_template_directory_uri() . '/js/jquery.paginate_li.js', '20151001', true);
    //Ubacuje prefixe u style
    wp_enqueue_script( 'bajweb-prefixFree', get_template_directory_uri() . '/js/prefixFree.js', array('jquery'), '20151202', true );
    // google maps
    wp_enqueue_script( 'bajweb-google-maps',  get_template_directory_uri() . '/js/google-map.js', array('jquery'), '20137202', true ); 
     // google script link
    if(function_exists( 'get_field' )){
    	wp_enqueue_script( 'bajweb-google-link', 'https://maps.googleapis.com/maps/api/js?key='.get_field('google_map_appy_key', 'option'), true ); 
    }
    //jq script
	wp_enqueue_script( 'bajweb-script', get_template_directory_uri() . '/js/jq_script.js', array('jquery'), '20770199', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bajweb_scripts' );

function my_acf_admin_enqueue_scripts() {
	
	// register style
    wp_enqueue_script( 'bajweb-google-link', 'https://maps.googleapis.com/maps/api/js?key='.get_field('google_map_appy_key', 'option'), true ); 
    
}

add_action( 'acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts' );

