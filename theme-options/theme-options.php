<?php
/*
acf plugin options
*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Google Adds',
		'menu_title'	=> 'Google Adds',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Basic Information',
		'menu_title'	=> 'Basic Information',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Image',
		'menu_title'	=> 'Header Image',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Call To Action',
		'menu_title'	=> 'Call To Action',
		'parent_slug'	=> 'theme-options',
	));
	
}

require get_template_directory() . '/theme-options/options-style.php';

require get_template_directory() . '/theme-options/basic-info.php';
require get_template_directory() . '/theme-options/soc-media.php';
require get_template_directory() . '/theme-options/google-apps.php';
require get_template_directory() . '/theme-options/cta.php';
require get_template_directory() . '/theme-options/header-background-image.php';
