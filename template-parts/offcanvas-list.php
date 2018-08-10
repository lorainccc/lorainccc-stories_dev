<?php

// WP_Query arguments for posts
$list_args = array(
	'post_type' => array( 'post' ),
	'posts_per_page' => '-1',
);

// The Query
$list_query = new WP_Query( $list_args );

if( $list_query->have_posts() ) :

?>

<div class="grid-x grid-padding-x offcanvas-post-list">
	
	<?php while( $list_query->have_posts() ) : $list_query->the_post(); ?>
	
	<div class="medium-6 cell offcanvas-list-item">
		
		<div class="offcanvas-list-item-inner">
		
			<div class="list-item-date"><?php the_time('F j, Y'); ?></div>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="list-item-excerpt">

				<?php echo wp_trim_words( get_field('post_intro_text'), 30, '...'); ?>

			</div>
			
		</div>
	
	</div>
	
	<?php endwhile; wp_reset_postdata(); ?>

</div>

<?php endif; ?>