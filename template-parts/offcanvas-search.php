<div class="grid-x grid-padding-x offcanvas-search">
	
	<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
		
		<form role="search" method="get" class="search-form" autocomplete="off" action="<?php echo home_url( '/' ); ?>">
			<label>
				<span class="screen-reader-text show-for-sr"><?php echo _x( 'Search', 'label', 'lccc-framework' ) ?></span>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search', 'lccc-framework' ) ?>" />
			</label>
			<input type="hidden" name="searchblogs" value="<?php echo get_current_blog_id(); ?>" />
			<input type="submit" class="search-submit-button yellow" value="" />
		</form>
	
	</div>

</div>