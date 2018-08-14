<?php

$twitter_icon = get_field('twitter_icon', 'option');
$facebook_icon = get_field('facebook_icon', 'option');
$linkedin_icon = get_field('linkedin_icon', 'option');

?>

<div class="grid-item medium-6 large-4 cell">
	
	<div class="post-archive-item">

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

		<div class="post-archive-item-inner">

			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<div class="post-date"><?php the_time('F j, Y'); ?></div>

			<div class="post-excerpt">

				<?php echo get_field('post_intro_text'); ?>

			</div>

			<?php if( $twitter_icon || $facebook_icon || $linkedin_icon ) : ?>

			<div class="share-buttons">

				<ul class="menu">

					<?php if( $twitter_icon ) : ?>

					<li class="icon">

						<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">

							<img src="<?php echo $twitter_icon['url']; ?>" alt="<?php echo $twitter_icon['alt']; ?>" height="28" width="28" />

						</a>

					</li>

					<?php endif; ?>

					<?php if( $facebook_icon ) : ?>

					<li class="icon">

						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">

							<img src="<?php echo $facebook_icon['url']; ?>" alt="<?php echo $facebook_icon['alt']; ?>" height="28" width="28" />

						</a>

					</l1>

					<?php endif; ?>

					<?php if( $linkedin_icon ) : ?>

					<li class="icon">

						<a href="http://www.linkedin.com/shareArticle?mini=true&<?php the_permalink(); ?>" target="_blank">

							<img src="<?php echo $linkedin_icon['url']; ?>" alt="<?php echo $linkedin_icon['alt']; ?>" height="28" width="28" />

						</a>

					</li>

					<?php endif; ?>

				</ul>

			</div>

			<?php endif; ?>

		</div>

	</div>

</div>