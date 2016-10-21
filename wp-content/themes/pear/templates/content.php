<?php while ( have_posts() ) : the_post(); ?>
	<div <?php post_class( 'text-center post' ); ?>>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
		<p class="text-size-smd text-capitalize pl32 pr32 pb24"><?php the_title(); ?></p>
	</div>
<?php endwhile; ?>