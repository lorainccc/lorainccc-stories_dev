<?php
/**
 * The template for displaying search results pages.
 *
 * @package LCCC Framework
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php get_template_part( 'template-parts/search', 'banner' ); ?>

		<?php if ( have_posts() ) : ?>
			
			<div class="grid-container search-results-wrapper">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
			
				?>

			<?php endwhile; ?>

			<?php //the_posts_navigation(); ?>
				
			</div>

		<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
				
			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
