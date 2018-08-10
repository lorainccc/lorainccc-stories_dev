<?php


$twitter_icon = get_field('twitter_icon', 'option');
$facebook_icon = get_field('facebook_icon', 'option');
$linkedin_icon = get_field('linkedin_icon', 'option');

if( has_post_thumbnail() ) :

	$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );

else :

	$fallback_featured_image = get_field('fallback_featured_image', 'option');
	$featured_image = $fallback_featured_image['url'];

endif;

?>

<div id="featured" class="grid-x grid-padding-x medium-padding-collapse" data-equalizer data-equalize-on="medium">
	
	<div class="medium-7 large-8 cell">
		
		<div class="featured-image-container show-for-medium" data-equalizer-watch>
	
			<a href="<?php the_permalink(); ?>">

				<div class="featured-image-container-inner" style="background-image: url(<?php echo $featured_image; ?>);"></div>

			</a>
			
		</div>
			
		<div class="featured-image hide-for-medium">
			
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		
		</div>
	
	</div>
	
	<div class="medium-5 large-4 cell">
		
		<div class="post-body" data-equalizer-watch>
			
			<div class="post-body-inner">
				
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="post-date"><?php the_time('F j, Y'); ?></div>

				<div class="post-excerpt">

					<?php the_field('post_intro_text'); ?>

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

</div>