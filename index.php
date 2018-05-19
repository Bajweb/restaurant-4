<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bajweb
 */

get_header(); ?>
	
<div class="container">			
	<div class="row">
		<div id="primary" class="content-area col-lg-8">
			<main id="main" class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

					<?php the_post_navigation(); ?>

					<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div class="col-lg-4">	
			<?php get_sidebar(); ?>
		</div><!-- .col-lg-3 -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer();