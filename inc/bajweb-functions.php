<?php
// sakriva broj aktualne verzije WP, dobar je kao prevencija od hakera
// ubacena je u moju temu u myFunctions.php
/* remove version string from js and css */
function bajweb_remove_wp_version_strings( $src ) {

	global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;

}
add_filter( 'script_loader_src', 'bajweb_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'bajweb_remove_wp_version_strings' );

/* remove metatag generator from header */
function bajweb_remove_meta_version() {
	return '';
}
add_filter( 'the_generator', 'bajweb_remove_meta_version' );

///////////////////////////////////////////////////////////////////////////////////////////////

// ubacuje meta tag description u svaki post, SEO
// potrebno je u adminu svakog posta kreiarti novi custom fields, poimenovati ga 'description'
// u polju pored ubaciti text koji zelimo da se pojavi u description
// posle toga potrebno je dodati ovaj kod ispod u functions.php
// primer testKviz post1 i myFunctions.php
// ovaj snipet je vec ubacen u moju startTheme u myFunctions.php
function bajweb_custom_meta_des(){
    if( is_single() ) {
        $des = get_post_meta( get_the_id(), 'description', true  );
         if( ! empty( $des ) ){
           $des = esc_html(  $des );
           echo "<meta name='description' content='$des'>";
          }
    }
}
add_action('wp_head','bajweb_custom_meta_des', 1 );

///////////////////////////////////////////////////////////////////////////////////////////////

// alowe svg images
function wps_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'wps_mime_types' );

///////////////////////////////////////////////////////////////////////////////////////////////

// Site brending
// site title
function displaySiteTitle(){ ?>
	<?php $bloginfo = get_bloginfo( 'name' ); ?>
		<?php if( !empty( $bloginfo ) ): ?>
			<h1 class="site-title brand-item"><?php bloginfo( 'name' ); ?></h1>
		<?php endif;
}

// site description
function displaySiteDescription(){ ?>
	<?php $description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
		<p class="site-description brand-item"><?php echo $description;  ?></p>
	<?php endif;
}

// Custom logo
function displayLogo(){ 
	 $custom_logo_id = get_theme_mod( 'custom_logo' ); 
	 if( !empty( $custom_logo_id ) ): 
		if( function_exists( 'the_custom_logo' ) ): ?>
			<div class="site-logo-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-logo-branding -->
		<?php  endif; 
	 endif; 
 }

// display primary menu
function displayPrimaryMenu(){ ?>

	<nav id="main-navigation" class="site-navigation">
		<h2 class="screen-reader-text"><?php esc_html( 'Nav Menu' ) ?></h2>
		<?php
			wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) ); ?>
	</nav><!-- #site-navigation -->

<?php }

// Display Site branding
function displaySiteBranding(){ 

	if( function_exists( 'get_field' ) ){ 
		$site_branding_set_up = get_field('site_branding_set_up', 'option');
	} ?>	

		<div class="site-branding">	

			<?php if( $site_branding_set_up['show_logo_on_front_page'] == true ): ?>
				<?php if(function_exists('displayLogo') ): ?>
					<?php displayLogo(); ?>
				<?php endif; ?>	
			<?php endif; ?>	

			<?php if( $site_branding_set_up['show_title_on_front_page'] == true ): ?>
				<?php if(function_exists('displaySiteTitle') ): ?>
					<?php displaySiteTitle(); ?>
				<?php endif; ?>
			<?php endif; ?>	

			<?php if( $site_branding_set_up['show_tagline_in_front_page'] == true ): ?>
				<?php if(function_exists('displaySiteDescription') ): ?>
					<?php displaySiteDescription(); ?>
				<?php endif; ?>	
			<?php endif; ?>	

			<?php if( $site_branding_set_up['show_soc_media_on_front_pag'] == true ): ?>
				<?php if(function_exists('applaySocialMedia') ): ?>
					<?php applaySocialMedia(); ?>
				<?php endif; ?>	
			<?php endif; ?>	

			<?php if( $site_branding_set_up['show_cta_on_front_pag'] == true ): ?>
				<?php if(function_exists('applayHeaderCta') ): ?> 
					<?php applayHeaderCta(); ?>
				<?php endif; ?>
			<?php endif; ?>

		</div><!--.site-branding-->	

<?php }

//////////////////////////////////////////
// Display Vido play-pause button
//////////////////////////////////////////
function videoPlayPauseButton(){ ?>
	
	<span id="video-play-pause" class="pause-btn"></span>

<?php }

////////////////////////////////////////////////////////////////////////////////////////////////

//================================
//  CUSTOM  CUSTOM  CUSTOM  CUSTOM
//================================