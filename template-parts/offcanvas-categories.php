<?php

$cat_args = array(
	'orderby' => 'name',
	'order' => 'ASC',
	'parent' => 0
);

$categories = get_categories();

?>

<div class="grid-x grid-padding-x offcanvas-cat-list">
	
<?php 

foreach( $categories as $category ) : 

	$cat_id = $category->term_id;
	
	// Do not show category: Uncategorized
	//if( $cat_id !== 1 ) :
	
?>
	
	<div class="small-6 large-4 cell text-center">
		
		<a href="<?php echo esc_url( get_category_link( $cat_id ) ); ?>" class="cat-link-button"><?php echo esc_html( $category->name ); ?></a>
	
	</div>
	
<?php 
	
	//endif;
	
endforeach; 
	
?>

</div>