<?php

$featured_text = get_sub_field('featured_text');
$optional_sub_text = get_sub_field('optional_sub_text');

if( $featured_text ) :

?>

<div class="flexible-layout-block">
	
	<div class="featured-text-container">
		
		<div class="grid-container">
			
			<div class="grid-x grid-padding-x">
				
				<div class="cell text-center">
					
					<div class="main-text">
						
						<?php echo $featured_text; ?>
					
					</div>
					
					<?php if( $optional_sub_text ) : ?>
					
					<div class="sub-text">
						
						<?php echo $optional_sub_text; ?>
					
					</div>
					
					<?php endif; ?>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

</div>

<?php endif; ?>