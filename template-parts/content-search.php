<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */

?>

<div class="grid-x grid-padding-x search-result-item">
	
	<div class="medium-5 large-4 cell image-cell">
		
		<a href="<?php the_permalink(); ?>">
			
			<?php 
			
			if( has_post_thumbnail() ) :
			
				the_post_thumbnail(); 
			
			else :
			
				$fallback_featured_image = get_field('fallback_featured_image', 'option');
			
				echo '<img src="' . $fallback_featured_image['url'] . '" alt="' . $fallback_featured_image['alt'] . '" />';
			
			endif; 
			
			?>
		
		</a>	
		
	</div>
	
	<div class="medium-7 large-8 cell content-cell">
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="post-date"><?php the_time('F j, Y'); ?></div>

		<div class="post-excerpt">

			<?php echo wp_trim_words( get_field('post_intro_text'), 30, '...'); ?>

		</div>
	
	</div>

</div>
