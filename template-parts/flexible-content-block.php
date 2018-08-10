<?php

$header = get_sub_field('header');
$header_type = get_sub_field('header_type');
$content_column = get_sub_field('content_column');
$include_media_column = get_sub_field('include_media_column');
$media_column_width = get_sub_field('media_column_width');
$media_column_ordering = get_sub_field('media_column_ordering');
$media_type = get_sub_field('media_type');
$media_type_image = get_sub_field('media_type_image');
$video_embed = get_sub_field('video_embed');
$optional_caption = get_sub_field('optional_caption');
$rand_id = 'modal-' . rand( 0, 1000);

if( $media_column_width == 'one-quarter' ) :

	$media_column_class = 'medium-3';

elseif( $media_column_width == 'half' ) :

	$media_column_class = 'medium-6';

else :

	$media_column_class = 'medium-4';

endif;

if( $include_media_column && $media_column_ordering == 'left' ) :

	$media_source_order = ' small-order-2 medium-order-1';
	$content_source_order = ' small-order-1 medium-order-2';

else :

	$media_source_order = '';
	$content_source_order = '';

endif;

?>

<div class="flexible-layout-block">

	<div class="grid-container content-block">

		<?php if( $header ) : ?>

		<div class="grid-x grid-padding-x content-header">

			<div class="cell">

				<?php echo '<' . $header_type . '>' . $header . '</' . $header_type . '>'; ?>

			</div>

		</div>

		<?php endif; ?>

		<div class="grid-x grid-padding-x">

			<div class="auto cell<?php echo $content_source_order; ?>">

				<?php echo $content_column; ?>

			</div>

			<?php if( $include_media_column ) : ?>

			<div class="<?php echo $media_column_class; ?> cell<?php echo $media_source_order; ?>">

				<?php if( $media_type == 'image' ) : ?>

				<img src="<?php echo $media_type_image['url']; ?>" alt="<?php echo $media_type_image['alt']; ?>" />

				<?php elseif( $media_type == 'video' ) : ?>

				<div class="content-video-wrapper responsive-embed">

					<?php echo $video_embed; ?>

					<div class="show-for-medium reveal-trigger" data-open="<?php echo $rand_id; ?>"></div>

				</div>

				<div class="reveal small video-popup" id="<?php echo $rand_id; ?>" data-reveal data-reset-on-close="true">

					<button class="close-button" data-close aria-label="Close modal" type="button">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-x.svg" alt="close offcanvas" width="25" height="25"/>
					</button>

					<div class="responsive-embed">

						<?php echo $video_embed; ?>

					</div>

				</div>

				<?php 

				endif;

				if( $optional_caption ) :

				?>

				<div class="media-caption">

					<?php echo $optional_caption; ?>

				</div>

				<?php endif; ?>

			</div>

			<?php endif; ?>

		</div>

	</div>
	
</div>