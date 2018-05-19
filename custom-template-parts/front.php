<?php
/*
 * Template Name: Front Page
 * Template Post Type: post, page
 */

get_header('home');   ?>

    <?php  get_template_part( 'theme-sections/section', 'about' ); ?> 
    
    <?php  get_template_part( 'theme-sections/section', 'features' ); ?> 

    <?php  get_template_part( 'theme-sections/section', 'menu' ); ?>     

    <?php  get_template_part( 'theme-sections/section', 'testimonials' ); ?> 

    <?php  get_template_part( 'theme-sections/section', 'contact' ); ?> 

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
