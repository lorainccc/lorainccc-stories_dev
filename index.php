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
						
						// WP_Query arguments for Featured Post
						$featured_args = array(
							'post_type' => array( 'post' ),
							'posts_per_page' => '1',
							'paged' => 1,
						);
						
						// The Query 
						$featured_query = new WP_Query( $featured_args );
						
						// The Loop
						if( $featured_query->have_posts() ) :
						
							while( $featured_query->have_posts() ) : $featured_query->the_post();
						
								// Create an array to store featured post's ID to exclude in the next query
								$excluded_id[] = $post->ID;
						
								get_template_part( 'template-parts/home', 'featured' );
						
							endwhile;
						
						endif;
						
						// WP_Query arguments for rest of posts
						$args = array(
							'post_type' => array( 'post' ),
							//'nopaging' => true,
							'posts_per_page' => '9',
							'post__not_in' => $excluded_id,
							'paged' => 1,
						);
						
						// The Query
						$query = new WP_Query( $args );
						
						// The Loop
						if( $query->have_posts() ) :
						
						?>
						
						<div class="masonry-container">
							
							<div id="ajax-posts" class="grid-x grid-padding-x grid">
								
								<?php 
								
								while( $query->have_posts() ) : $query->the_post();
								
									get_template_part( 'template-parts/home', 'loop' );
								
								endwhile;
								
								?>
							
							</div>
						
						</div>
						
						<?php
						
						wp_reset_postdata();
						
						endif;
						
						//the_posts_navigation();
						
						?>
						
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
