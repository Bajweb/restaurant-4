<?php

if( function_exists( 'get_field' ) ){ 

	function applaySocialMedia(){ 

		if( have_rows('social_media_group', 'option') ): ?>
			<ul class="socmedia"> 
				<?php while ( have_rows('social_media_group', 'option') ) : the_row(); ?>
				<li class="socmedia-item"><a href="<?php echo get_sub_field('soc_link', 'option'); ?>"  style="background-image: url( <?php echo get_sub_field('soc_icon', 'option'); ?> );"></a></li>
				<?php endwhile; ?>
			</ul>
		<?php endif;

	}

}