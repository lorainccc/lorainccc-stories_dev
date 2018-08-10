<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LCCC Stories
 */
?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="grid-container">
					<div class="grid-x grid-padding-x align-middle">
						<div class="medium-7 cell small-order-2 medium-order-1">
							<a href="http://www.lorainccc.edu/" target="_blank"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lccclogo_white.svg" alt="Lorian County Community College Logo" /></a>
							<div class="links">
								<span><a id="cat-link">Categories</a></span> | <span><a id="list-link">List View</a></span>
							</div>
							<div class="main-site-link">
								<a href="http://www.lorainccc.edu/" target="_blank">www.lorainccc.edu</a>
							</div>
							<div class="copyright">
								<span>Copyright Lorain County Community College <?php echo date('Y'); ?></span>
							</div>
						</div>
						<div class="medium-5 medium-offset-0 cell medium-order-2 small-order-1">
							<form role="search" method="get" class="search-form" autocomplete="off" action="<?php echo home_url( '/' ); ?>">
								<label>
									<span class="screen-reader-text show-for-sr"><?php echo _x( 'Search', 'label', 'lccc-framework' ) ?></span>
									<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" />
								</label>
								<input type="submit" class="search-submit-button white" value="" />
							</form>
						</div>
					</div>
				</div>
			</footer><!-- #colophon -->

		</div> <!-- end .off-canvas-content -->

	</div><!-- end .off-canvas-wrapper -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
