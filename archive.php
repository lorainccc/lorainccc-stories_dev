<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Stories
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php get_template_part( 'template-parts/cat', 'archive-banner' ); ?>

		<?php if ( have_posts() ) : ?>

			<div class="grid-container cat-archive-container masonry-container">
							
				<div class="grid-x grid-padding-x grid">

			
					<?php /* Start the Loop */ ?>
					<?php 

					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/loop', 'cat-archive' );

					endwhile; 

					?>
					
				</div>
				
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
