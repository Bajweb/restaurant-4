<?php
/*
 * Template Name: Fluid Left Right Sidebar
 * Template Post Type: page
 */
get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 order-lg-1 order-2">	
				<?php get_sidebar(); ?>
			</div>
					
			<div id="primary" class="content-area col-lg-6  order-lg-2 order-1">
				<main id="main" class="site-main">

					<?php
					while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page-fluid' ); ?>

						<?php // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; ?>

					<?php endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<div class="col-lg-3 col-md-6  order-lg-3 order-3">	
			<?php get_sidebar('second'); ?>
			</div><!-- .col-3 -->
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer();