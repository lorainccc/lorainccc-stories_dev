<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */
?>

<div class="grid-container">
	
	<div class="grid-x grid-padding-x">
		
		<div class="cell">
			
			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'lccc-framework' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'lccc-framework' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>
					
						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lccc-framework' ); ?></p>

						<div class="grid-x grid-padding-x">
							
							<div class="medium-6 large-5 cell">
								
								<form role="search" method="get" class="search-form no-content" autocomplete="off" action="<?php echo home_url( '/' ); ?>">
									<label>
										<span class="screen-reader-text show-for-sr"><?php echo _x( 'Search', 'label', 'lccc-framework' ) ?></span>
										<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" />
									</label>
									 <input type="hidden" name="searchblogs" value="<?php echo get_current_blog_id(); ?>" />
									<input type="submit" class="search-submit-button yellow" value="" />
								</form>
							
							</div>
					
						</div>

					<?php else : ?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lccc-framework' ); ?></p>
						
						<div class="grid-x grid-padding-x">
							
							<div class="medium-6 large-5 cell">
								
								<form role="search" method="get" class="search-form no-content" autocomplete="off" action="<?php echo home_url( '/' ); ?>">
									<label>
										<span class="screen-reader-text show-for-sr"><?php echo _x( 'Search', 'label', 'lccc-framework' ) ?></span>
										<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" />
									</label>
									 <input type="hidden" name="searchblogs" value="<?php echo get_current_blog_id(); ?>" />
									<input type="submit" class="search-submit-button yellow" value="" />
								</form>
							
							</div>
					
						</div>

					<?php endif; ?>
				</div><!-- .page-content -->
			</section><!-- .no-results -->
		
		</div>
	
	</div>

</div>

