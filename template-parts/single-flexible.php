<?php 

if( have_rows('content_options') ) :

	while( have_rows('content_options') ) : the_row();

		if( get_row_layout() == 'content_block' ) :

			get_template_part( 'template-parts/flexible', 'content-block' );

		elseif( get_row_layout() == 'full_width_image' ) :

			get_template_part( 'template-parts/flexible', 'fullwidth-image' );

		elseif( get_row_layout() == 'centered_content_block' ) :

			get_template_part( 'template-parts/flexible', 'centered-content' );

		elseif( get_row_layout() == 'quote' ) :

			get_template_part( 'template-parts/flexible', 'quote' );

		elseif( get_row_layout() == 'full_width_section_header' ) :

			get_template_part( 'template-parts/flexible', 'fullwidth-header' );

		elseif( get_row_layout() == 'featured_text_section' ) :

			get_template_part( 'template-parts/flexible', 'featured-text' );

		elseif( get_row_layout() == 'image_video_spotlight' ) :

			get_template_part( 'template-parts/flexible', 'spotlight' );

		elseif( get_row_layout() == 'image_gallery' ) :

			get_template_part( 'template-parts/flexible', 'gallery' );

		endif;

	endwhile;

endif;

?>