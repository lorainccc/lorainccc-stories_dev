<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<?php get_template_part( 'template-parts/home', 'banner' ); ?>
						
			<div class="grid-container posts-container">
				
				<div class="grid-x grid-padding-x">
					
					<div class="cell">
						
						<?php
						
						$counter = 1;
						
						if( have_posts() ) : while( have_posts() ) : the_post();
						
							if( $counter == 1 ) :
						
								get_template_part( 'template-parts/home', 'featured' );
						
							else :
						
								if($counter == 2 ) :
						
								?>

								<div class="masonry-container">

									<div id="ajax-posts" class="grid-x grid-padding-x grid">


								<?php
						
								endif;
						
								get_template_part( 'template-parts/home', 'loop' );
						
							endif;
						
						
						$counter++; endwhile; endif; 
										
						if ($counter > 1 ) :
						
						?>
									
							</div>
								
						</div>
						
						<?php endif; ?>
						
						
						<div class="text-center">
						
							<a id="more_posts" class="button hollow">Show More Stories</a>
							
						</div>
					
						
					</div>
					
				</div>
				
			</div> <!-- .posts-container -->

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
