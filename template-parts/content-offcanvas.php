<div class="off-canvas offcanvas-full-screen position-top" id="off-canvas" data-off-canvas data-transition="overlap" data-content-scroll="false" data-transition="detached">
	
	<div class="offcanvas-full-screen-inner">
		
		<div class="grid-container">
			
			<div class="grid-x grid-padding-x">
				
				<div class="cell">
					
					<button class="offcanvas-full-screen-close" aria-label="Close menu" type="button" data-close>
        				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-x.svg" alt="close offcanvas" width="25" height="25"/>
    				</button>
					
					<ul class="tabs" id="menu-tabs" data-tabs>
		
						<li id="list-tab" class="tabs-title is-active"><span><a href="#list">Lists</a><span class="underline"></span></span></li>
						<li id="categories-tab" class="tabs-title"><span><a href="#categories">Categories</a><span class="underline"></span></span></li>
						<li id="search-tab" class="tabs-title"><span><a href="#search">Search</a><span class="underline"></span></span></li>

					</ul>

					<div class="tabs-content" data-tabs-content="menu-tabs">

						<div class="tabs-panel is-active" id="list">
							
							<?php get_template_part( 'template-parts/offcanvas', 'list' ); ?>

						</div>

						<div class="tabs-panel" id="categories">

							<?php get_template_part( 'template-parts/offcanvas', 'categories' ); ?>

						</div>

						<div class="tabs-panel" id="search">

							<?php get_template_part( 'template-parts/offcanvas', 'search' ); ?>

						</div>

					</div>
				
				</div>
			
			</div>
		
		</div>
		
	</div>
	
</div>