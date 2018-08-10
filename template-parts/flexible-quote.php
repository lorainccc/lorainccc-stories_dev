<?php

$quote_layout = get_sub_field('quote_layout');
$quote_content = get_sub_field('quote_content');
$quote_attribution = get_sub_field('quote_attribution');

if( $quote_layout == 'one' ) :

	$quote_border = '<div class="quote-border"></div>';
	$has_bg = ' layout-one';

else :

	$quote_border = '';
	$has_bg = ' layout-two';

endif;

if( $quote_content ) :

?>

<div class="flexible-layout-block">
	
	<div class="quote-container<?php echo $has_bg; ?>">
	
		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-10 medium-offset-1 cell text-center">

					<div class="quote-wrapper">

						<?php echo $quote_border; ?>

						<div class="quote-content">

							&ldquo;<?php echo $quote_content; ?>&rdquo;

						</div>

						<?php if( $quote_attribution ) : ?>

						<div class="quote-attribution">

							<?php echo $quote_attribution; ?>

						</div>

						<?php endif; ?>

						<?php echo $quote_border; ?>

					</div>

				</div>

			</div>

		</div>
		
	</div>

</div>

<?php endif; ?>