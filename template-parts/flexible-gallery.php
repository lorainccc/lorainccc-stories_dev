<?php

$images = get_sub_field('gallery_images');

if( $images ) :

?>

<div class="flexible-layout-block">
	
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x">
			
			<?php foreach( $images as $image ) : ?>
			
			<div class="medium-4 cell">
				
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			
			</div>
			
			<?php endforeach; ?>
		
		</div>
	
	</div>

</div>

<?php endif; ?>