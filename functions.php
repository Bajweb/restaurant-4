<?php
/**
 * Bajweb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bajweb
 */

/**
 * Implement the Custom Enqueue Scripts.
 */
require get_template_directory() . '/inc/enqueue_scripts.php';

/**
 * Implement the Custom bajweb Functions.
 */
require get_template_directory() . '/inc/bajweb-functions.php';

/**
 * Implement the Custom Widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php'; 
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/theme-options/theme-options.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/theme-sections/theme-sections.php';
