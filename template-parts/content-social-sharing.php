<?php

$share_text = get_field('share_text', 'option');
$twitter_icon = get_field('twitter_icon', 'option');
$facebook_icon = get_field('facebook_icon', 'option');
$linkedin_icon = get_field('linkedin_icon', 'option');

if( $share_text && ( $twitter_icon || $facebook_icon || $linked_icon ) ) :

?>

<div class="social-sharing-block">
	
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x align-center">
			
			<div class="medium-shrink cell social-sharing-inner">
				
				<div class="grid-x grid-padding-x align-middle">
					
					<div class="medium-auto cell text-center">
						
						<div class="share-text"><?php echo $share_text; ?></div>
					
					</div>
				
					<div class="medium-shrink cell">
						
						<div class="share-icons">
				
							<ul class="menu align-center">

								<?php if( $twitter_icon ) : ?>

								<li class="icon">

									<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">

										<img src="<?php echo $twitter_icon['url']; ?>" alt="<?php echo $twitter_icon['alt']; ?>" />

									</a>

								</li>

								<?php endif; ?>

								<?php if( $facebook_icon ) : ?>

								<li class="icon">

									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">

										<img src="<?php echo $facebook_icon['url']; ?>" alt="<?php echo $facebook_icon['alt']; ?>" />

									</a>

								</l1>

								<?php endif; ?>

								<?php if( $linkedin_icon ) : ?>

								<li class="icon">

									<a href="http://www.linkedin.com/shareArticle?mini=true&<?php the_permalink(); ?>" target="_blank">

										<img src="<?php echo $linkedin_icon['url']; ?>" alt="<?php echo $linkedin_icon['alt']; ?>" />

									</a>

								</li>

								<?php endif; ?>

							</ul>

						</div>

					</div>	
				
				</div>
			
			</div>
		
		</div>
	
	</div>

</div>

<?php endif; ?>