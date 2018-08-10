<?php

$spotlight_media_type = get_sub_field('spotlight_media_type');
$spotlight_optional_caption = get_sub_field('spotlight_optional_caption');
$spotlight_image = get_sub_field('spotlight_image');
$spotlight_video = get_sub_field('spotlight_video_embed');

if( $spotlight_media_type == 'image' ) :

	$spotlight_media = '<img src="' . $spotlight_image['url'] . '" alt="' . $spotlight_image['alt'] . '" />';

elseif( $spotlight_media_type == 'video' ) :

	$spotlight_media = '<div class="responsive-embed">' . $spotlight_video  . '</div>';

endif;

if( $spotlight_media ) :

?>

<div class="flexible-layout-block">
	
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x">
			
			<div class="medium-8 medium-offset-2 cell">
				
				<?php 
				
				echo $spotlight_media; 
				
				if( $spotlight_optional_caption ) :
				
				?>
				
				<div class="media-caption">
					
					<?php echo $spotlight_optional_caption; ?>
				
				</div>
				
				<?php endif; ?>
			
			</div>
		
		</div>
	
	</div>

</div>

<?php endif; ?>