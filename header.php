<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bajweb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="info"></div>
	<div class="sirina-window"></div> 

	<?php if( function_exists( 'get_field' ) ){ 
		$loading_screen = get_field('loading_screen', 'option'); 
	} 
	if( $loading_screen == true ): ?>
		<div id="load_screen"><div class="loader"></div></div>	
	<?php endif; ?>


<div id="main-container" class="main-container">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bajweb' ); ?></a>

	<header id="masthead" class="site-image-header masthead-front-page">
		<?php if(function_exists('displayPrimaryMenu') ): ?>
			<div id="toggle-bar" class="toggle-bar-front">
				<span class="toggle-button">menu</span>
			</div>
			<div id="top-bar" class="front-top-bar">
				<?php  displayPrimaryMenu(); ?>
			</div>
		<?php endif; ?>					
	</header>

	<div id="wrap-primary-secondary">
		
	
	

	





	