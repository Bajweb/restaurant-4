<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bajweb
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="move-div">
		<?php if ( has_post_thumbnail() ) : ?> 
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			<header class="entry-header"  style="background-image: url('<?php echo $thumb['0'];?>')">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		<?php else: ?>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		<?php endif; ?>
	</div><!-- .move-div -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		<?php bajweb_posted_on(); ?>
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
			echo '<span class="comments-link">';
			comments_popup_link( __( 'Leave a comment', 'bajweb' ), __( '1 Comment', 'bajweb' ), __( '% Comments', 'bajweb' ) );
			 echo '</span>';
		} ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>				

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bajweb' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bajweb' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bajweb_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
