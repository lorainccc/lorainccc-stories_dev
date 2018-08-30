<?php
/**
 * The template for displaying all single posts.
 *
 * @package LCCC Framework
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php 
			
			get_template_part( 'template-parts/single', 'banner' );
			get_template_part( 'template-parts/single', 'intro' ); 
			get_template_part( 'template-parts/single', 'cats' );
			get_template_part( 'template-parts/single', 'flexible' );
			get_template_part( 'template-parts/content', 'social-sharing' );
			get_template_part( 'template-parts/single', 'related-posts' );
			
			?>

			<?php //the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
			/*
	if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				*/
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
