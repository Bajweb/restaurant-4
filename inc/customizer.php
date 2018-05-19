<?php
/**
 * Bajweb Theme Customizer
 *
 * @package Bajweb
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bajweb_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'bajweb_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'bajweb_customize_partial_blogdescription',
		) );
	}

    // remove heade image from customizer
    $wp_customize->remove_control("header_image");

    //remove background image
    $wp_customize->remove_section("background_image");

    // remove clors
    $wp_customize->remove_section("colors");

}
add_action( 'customize_register', 'bajweb_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bajweb_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bajweb_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bajweb_customize_preview_js() {
	wp_enqueue_script( 'bajweb-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bajweb_customize_preview_js' );

//Output customize CSS
add_action( 'wp_head', 'bajweb_customize_css');
function bajweb_customize_css()
{
?>
<style type="text/css">
    <?php if ( 0 < count( strlen( ( $background_image_url = get_theme_mod( 'background_setting' ) ) ) ) ) { ?>
        #services {background-image: url( <?php echo $background_image_url; ?> );}
    <?php } // end if ?>
    <?php if ( 0 < count( strlen( ( $background_color = get_theme_mod( 'color_setting' ) ) ) ) ) { ?>
        #contact {background-color: <?php echo $background_color; ?>;}
    <?php } // end if ?>
</style>
<?php
}
