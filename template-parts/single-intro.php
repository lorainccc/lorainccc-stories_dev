<?php

$post_intro_text = get_field('post_intro_text');

?>

<div class="post-intro-wrapper text-center">
	
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x post-date-wrapper">
			
			<div class="small-8 medium-6 large-4 small-offset-2 medium-offset-3 large-offset-4 cell">
				
				<div class="post-date"><?php the_time('F j, Y'); ?></div>
			
			</div>
		
		</div>
		
		<?php if( $post_intro_text ) : ?>
		
		<div class="grid-x grid-padding-x">
			
			<div class="cell post-intro">
				
				<?php echo $post_intro_text; ?>
			
			</div>
		
		</div>
		
		<?php endif; ?>
			
	</div>

</div>