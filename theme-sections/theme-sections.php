<?php
/*
acf plugin sections
*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Sections',
		'menu_title'	=> 'Theme Sections',
		'menu_slug' 	=> 'theme-sections',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Section',
		'menu_title'	=> 'About Section',
		'parent_slug'	=> 'theme-sections',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Features Section',
		'menu_title'	=> 'Features Section',
		'parent_slug'	=> 'theme-sections',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Menu Section',
		'menu_title'	=> 'Menu Section',
		'parent_slug'	=> 'theme-sections',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Testimonials Section',
		'menu_title'	=> 'Features Section',
		'parent_slug'	=> 'theme-sections',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Section',
		'menu_title'	=> 'Contact Section',
		'parent_slug'	=> 'theme-sections',
	));
	
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/theme-sections/section-style.php';