<?php

$post_banner_background_type = get_field('post_banner_background_type');
$post_banner_image = get_field('post_banner_image');
$banner_vertical_positioning = get_field('banner_vertical_positioning');
$video_bg = get_field('video_bg');
$video_poster_image = get_field('video_poster_image');

if( $post_banner_background_type == 'image' ) :

	$banner_style = ' style="background-image: url(' . $post_banner_image . '); background-position: center ' . $banner_vertical_positioning . ';"';
	$banner_type = 'image-bg';
	$video = false;

elseif( $post_banner_background_type == 'video' ) :

	$banner_style = '';
	$banner_type = 'video-bg';
	$video = true;

endif;

if( $banner_type ) :

?>

<div class="banner post-banner <?php echo $banner_type; ?>"<?php echo $banner_style; ?>>
	
	<?php if( $video ) : ?>
	
	<video poster="<?php echo $video_poster_image; ?>" autoplay muted loop class="vidbacking">
		<source src="<?php echo $video_bg; ?>" type="video/mp4">
	</video>
	
	<?php endif; ?>
	
	<div class="banner-inner">
		
		<div class="banner-headline-wrapper">
			
			<div class="grid-container">
				
				<div class="grid-x grid-padding-x">
					
					<div class="cell">
						
						<h1><?php the_title(); ?></h1>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

</div>

<?php endif; ?>