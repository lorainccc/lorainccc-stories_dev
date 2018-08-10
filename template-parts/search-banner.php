<?php

$post_banner_background_type = get_field('search_banner_background_type', 'option');
$post_banner_image = get_field('search_banner_image', 'option');
$banner_vertical_positioning = get_field('search_banner_vertical_positioning', 'option');
$video_bg = get_field('search_video_bg','option');
$video_poster_image = get_field('search_video_poster_image', 'option');

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

<div class="banner search-banner <?php echo $banner_type; ?>"<?php echo $banner_style; ?>>
	
	<?php if( $video ) : ?>
	
	<video poster="<?php echo $video_poster_image; ?>" autoplay muted loop class="vidbacking">
		<source src="<?php echo $video_bg; ?>" type="video/mp4">
	</video>
	
	<?php endif; ?>
	
	<div class="search-banner-inner">
		
		<div class="search-banner-headline-wrapper">
			
			<div class="grid-container">
				
				<div class="grid-x grid-padding-x">
					
					<div class="cell">
						
						<h1><?php _e( 'Search Results: ', 'lccc-framework'); echo esc_attr( get_search_query() ); ?></h1>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

</div>

<div class="white-triangle-up"></div>

<?php endif; ?>