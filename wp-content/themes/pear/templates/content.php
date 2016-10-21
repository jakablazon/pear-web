<div <?php is_single() ? post_class( 'col-xs-12 col-sm-3 text-center post' ) : post_class( 'text-center post' ); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( is_single() ? 'thumbnail' : 'medium' ); ?></a>
	<p class="text-size-smd text-capitalize pl32 pr32 pb24"><?php the_title(); ?></p>
</div>