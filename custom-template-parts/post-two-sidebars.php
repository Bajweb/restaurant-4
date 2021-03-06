<?php
/*
 * Template Name: Right - Left Sidebar
 * Template Post Type: post
 */
get_header(); ?>
	
<div class="container">	
	<div class="row">
		<div class="col-lg-3">	
		<?php get_sidebar('second'); ?>
		</div><!-- .col-lg-3 -->		
		
		<div id="primary" class="content-area col-lg-6">
			<main id="main" class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

					<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

				<?php endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div class="col-lg-3">	
		<?php get_sidebar(); ?>
		</div><!-- .col-lg-3 -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer();