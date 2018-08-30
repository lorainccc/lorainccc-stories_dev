<?php 

$full_width_header = get_sub_field('full_width_header');
$full_width_header_type = get_sub_field('full_width_header_type');

if( $full_width_header ) :

?>

<div class="flexible-layout-block full-width-header-block">
	
	<div class="full-width-header">
		
		<div class="grid-container">
			
			<div class="grid-x grid-padding-x">
				
				<div class="cell text-center">
					
					<?php echo '<' . $full_width_header_type . '>' . $full_width_header . '</' . $full_width_header_type . '>'; ?>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

</div>

<?php endif; ?>