<?php

$fw_image_bg = get_sub_field('fw_image_bg');
$fw_image_vertical_positioning = get_sub_field('fw_image_vertical_positioning');
$fw_image_container_height = get_sub_field('fw_image_container_height');
$fw_image_optional_caption = get_sub_field('fw_image_optional_caption');
$background_attachment_type = get_sub_field('background_attachment_type');

if( $background_attachment_type == 'fixed' ) :

	$background_style = ' background-attachment: fixed;';

else :

	$background_style = ' background-position: center ' . $fw_image_vertical_positioning . ';';

endif;

if( $fw_image_bg ) :

?>

<div class="flexible-layout-block">

	<div class="full-width-image" style="background-image: url(<?php echo $fw_image_bg; ?>); height: <?php echo $fw_image_container_height; ?>px;<?php echo $background_style; ?>"></div>

	<?php if( $fw_image_optional_caption ) : ?>

	<div class="grid-container">

		<div class="grid-x grid-padding-x">

			<div class="cell">

				<div class="media-caption">

					<?php echo $fw_image_optional_caption; ?>

				</div>

			</div>

		</div>

	</div>

	<?php endif; ?>
	
</div>

<?php endif; ?>