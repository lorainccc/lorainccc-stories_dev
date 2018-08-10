<?php

$home_banner_background_type = get_field('home_banner_background_type', 'option');
$banner_image = get_field('home_banner_image', 'option');
$vertical_positioning = get_field('home_banner_vertical_positioning', 'option');
$home_banner_video_bg = get_field('home_banner_video_bg', 'option');
$home_banner_video_poster_image = get_field('home_banner_video_poster_image', 'option');
$headline_left = get_field('headline_left', 'option');
$headline_center = get_field('headline_center', 'option');
$headline_right = get_field('headline_right', 'option');

if( $home_banner_background_type == 'image' ) :

	$banner_style = ' style="background-image: url(' . $banner_image . '); background-position: center ' . $vertical_positioning . ';"';
	$banner_type = 'image-bg';
	$video = false;

elseif( $home_banner_background_type == 'video' ) :

	$banner_style = '';
	$banner_type = 'video-bg';
	$video = true;

endif;

if( $headline_center || $headline_left || $headline_right ) :

	$headline = '<h1>';

	if( $headline_left ) :

		$headline .= '<span class="headline-small">' . $headline_left . '</span> ';

	endif;

	if( $headline_center ) :

		$headline .= '<span class="headline-big">' . $headline_center . '</span>';

	endif;

	if( $headline_right ) :

		$headline .= ' <span class="headline-small">' . $headline_right . '</span>';

	endif;

	$headline .= '</h1>';

endif;

if( $banner_image ) :

?>

<div class="banner home-banner <?php echo $banner_type; ?>"<?php echo $banner_style; ?>>
	
	<?php if( $video ) : ?>
	
	<video poster="<?php echo $home_banner_video_poster_image; ?>" autoplay muted loop class="vidbacking">
		<source src="<?php echo $home_banner_video_bg; ?>" type="video/mp4">
	</video>

	<?php endif; ?>
	
	<div class="banner-inner">
		
		<div class="grid-container">

			<div class="grid-x grid-padding-x align-middle">

				<div class="cell text-center">

					<?php if( $headline ) : echo $headline; endif; ?>

				</div>

			</div>

		</div>
		
	</div>
	
</div>

<?php endif; ?>