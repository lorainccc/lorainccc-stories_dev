<?php

$centered_content_header = get_sub_field('centered_content_header');
$centered_content_header_type = get_sub_field('centered_content_header_type');
$centered_content_content = get_sub_field('centered_content_content');

if( $centered_content_content ) :

?>

<div class="flexible-layout-block">
	
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x">
			
			<div class="medium-10 medium-offset-1 cell">
				
				<?php 
				
				if( $centered_content_header ) : 
				
					echo '<' . $centered_content_header_type . '>' . $centered_content_header . '</' . $centered_content_header_type . '>';
				
				endif;
				
				echo $centered_content_content;
				
				?>
			
			</div>
		
		</div>
	
	</div>

</div>

<?php endif; ?>