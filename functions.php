<?php
/**
 * LCCC Framework functions and definitions
 *
 * @package LCCC Framework
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'lorainccc-stories_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function lorainccc_stories_setup() {

		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LCCC Framework, use a find and replace
	 * to change 'lccc-stories' to the name of your theme in all the template files
	 */
		load_theme_textdomain( 'lccc-stories', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support( 'title-tag' );

		/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
		//add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'lccc-stories' ),
		) );

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
		add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lorainccc-stories_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // lorainccc-stories_setup
add_action( 'after_setup_theme', 'lorainccc_stories_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function lorainccc_stories_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lccc-stories' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'lorainccc_stories_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lorainccc_stories_scripts() {

	/* ----- Add Foundation Support ----- */
	/* Add Foundation CSS */
	
	/* Add Custom CSS */
	
 	wp_enqueue_style( 'genericons', get_stylesheet_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
 
	/* Add Foundation JS */
	
	 wp_enqueue_style( 'foundation',  get_template_directory_uri() . '/foundation-643/css/foundation.css' );

		wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation-643/js/vendor/foundation.js', array( 'jquery' ), '1', true );
		wp_enqueue_script( 'foundation-whatinput', get_template_directory_uri() . '/foundation-643/js/vendor/what-input.js', array( 'jquery' ), '1', true);
	/* Foundation Init JS */
	
	wp_enqueue_script( 'foundation-init-js', get_stylesheet_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );
	
		/* Foundation Icons */
	if ( wp_style_is( 'foundation_font_icon_css', 'enqueued' ) ) {
		return;
	}else{
			wp_enqueue_style('foundation_font_icon_css', get_template_directory_uri() . '/foundation-icons/foundation-icons.css');
	}
	/* ----- End Foundation Support ----- */
		
	wp_enqueue_style( 'lccc-stories-style', get_stylesheet_uri() );
 
 wp_enqueue_style( 'lccc-print-stories-style', get_stylesheet_directory_uri() . '/print.css', array(), '', 'print' );
	
	wp_enqueue_script( 'lccc-stories-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );

	wp_enqueue_script( 'lccc-stories-skip-link-focus-fix', get_stylesheet_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

		//Adds Google Analytics, Google Tag, Hotjar and Eloqua to header
	wp_enqueue_script( 'lc-eloqua-scripts', get_stylesheet_directory_uri() . '/js/lc-eloqua.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-google-analytics-scripts', get_stylesheet_directory_uri() . '/js/lc-google-analytics.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-google-tag-scripts', get_stylesheet_directory_uri() . '/js/lc-google-tag.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-hotjar-scripts', get_stylesheet_directory_uri() . '/js/lc-hotjar.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-siteimprove-scripts', get_stylesheet_directory_uri() . '/js/lc-siteimprove.js', array(), '20180828', false);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lorainccc_stories_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.

require get_template_directory() . '/inc/template-tags.php';
 */
/**
 * Custom functions that act independently of the theme templates.
 
require get_template_directory() . '/inc/extras.php';
*/
/**
 * Customizer additions.
 
require get_template_directory() . '/inc/customizer.php';
*/
/**
 * Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';
*/
add_theme_support( 'post-thumbnails' );

// Automatically make links clickable in the content editor.
add_filter( 'the_content', 'make_clickable',      12 );


// ACF Option Pages
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Front Page Settings',
		'menu_title'	=> 'Front Page Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );


// If banner has video background, enqueue Vidbacking assests
// vidbacking - https://github.com/souravm84/vidbacking
function lc_enqueue_vidbacking() {
	global $post;
	
	$post_id = $post->ID;
	
	// Check Homepage first
	if( is_front_page() ) {
		$bg_type = get_field('home_banner_background_type', 'option');
	}
	// if is single post
	elseif( is_single() ) {
		$bg_type = get_field('post_banner_background_type', $post_id);
	}
	elseif( is_search() ) {
		$bg_type = get_field('search_banner_background_type', 'option');
	}
	elseif( is_category() ) {
		global $wp_query;
		$cat_id = $wp_query->get_queried_object();
		$bg_type = get_field('cat_banner_background_type', $cat_id);
	}
	else {
		$bg_type = '';
	}
	
	if( $bg_type == 'video' ) {
		wp_enqueue_style('vidbacking-css', get_stylesheet_directory_uri() . '/js/vidbacking/dist/jquery.vidbacking.min.css', array(), null, 'all' );
		wp_enqueue_script('videbacking-js', get_stylesheet_directory_uri() . '/js/vidbacking/dist/jquery.vidbacking.min.js', array( 'jquery' ), null, false );
	}
	
}
add_action('wp_enqueue_scripts', 'lc_enqueue_vidbacking');

// Initialize vidbacking
function vidbacking_init() {
	global $post;
	
	$post_id = $post->ID;
	
	// Check Homepage first
	if( is_front_page() ) {
		$bg_type = get_field('home_banner_background_type', 'option');
	}
	// if is single post
	elseif( is_single() ) {
		$bg_type = get_field('post_banner_background_type', $post_id);
	}
	elseif( is_search() ) {
		$bg_type = get_field('search_banner_background_type', 'option');
	}
	elseif( is_category() ) {
		global $wp_query;
		$cat_id = $wp_query->get_queried_object();
		$bg_type = get_field('cat_banner_background_type', $cat_id);
	}
	else {
		$bg_type = '';
	}
	
	if( $bg_type == 'video' ) {
	?>
	<script>
		
		jQuery(function() {
			jQuery('.video-bg').vidbacking();
		});

	</script>
	<?php
	}
}
add_action('wp_footer', 'vidbacking_init');


// Enqueue masonry js plugin - CDN Link
// Documentation - https://masonry.desandro.com/
function enqueue_masonry() {
	if( is_front_page() || is_category() ) {
		wp_enqueue_script('masonry', get_stylesheet_directory_uri() . '/js/masonry/masonry.pkgd.min.js', array('jquery'), '', true );
		wp_enqueue_script('images-loaded', get_stylesheet_directory_uri() . '/js/masonry/imagesloaded.pkgd.min.js', array('jquery'), '', true );
	}
}
add_action('wp_enqueue_scripts', 'enqueue_masonry', 9999);

// Initialize Masonry

function masonry_init() {
	if( is_front_page() || is_category() ) {
	?>
	<script>
		
		var $grid = jQuery('.grid').masonry({
			itemSelector: '.grid-item',
		});
		
		$grid.imagesLoaded().progress( function() {
			$grid.masonry('layout');
		});

	</script>
	<?php	
	}
}
add_action('wp_footer', 'masonry_init', 10000);


// Open off-canvas tab depending on what link was clicked
function offcanvas_active_tab() {
?>

<script>
	
	jQuery('.menu-icon, #list-link').click( function() {
		jQuery('#off-canvas').foundation('open');
	});
	
	jQuery('.search-icon').click( function() {
		jQuery('#off-canvas').foundation('open');
		jQuery('#list-tab, #list').removeClass('is-active');
		jQuery('#list-tab > a').attr('aria-selected', 'false');
		jQuery('#search-tab, #search').addClass('is-active');
		jQuery('#search-tab > a').attr('aria-selected', 'true');
	});
	
	jQuery('#cat-link').click( function() {
		jQuery('#off-canvas').foundation('open');
		jQuery('#list-tab, #list').removeClass('is-active');
		jQuery('#list-tab > a').attr('aria-selected', 'false');
		jQuery('#categories-tab, #categories').addClass('is-active');
		jQuery('#categories-tab > a').attr('aria-selected', 'true');
	});
	
	jQuery('.offcanvas-full-screen-close').click( function() {
		jQuery('#search-tab, #search, #categories-tab, #categories').delay( 500 ).removeClass('is-active');
		jQuery('#search-tab > a, #categories-tab > a').delay( 500 ).attr('aria-selected', 'false');
		jQuery('#list-tab, #list').delay( 500 ).addClass('is-active');
		jQuery('#list-tab > a').delay( 500 ).attr('aria-selected', 'true');
	});

</script>


<?php
}
add_action('wp_footer', 'offcanvas_active_tab');


function enqueue_functions_js() {
	if( is_front_page() ) :
	
		wp_enqueue_script( 'show_more', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'), '', true );
		wp_localize_script( 'show_more', 'ajax_object', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			//'noposts' => __('No more posts to show', 'lccc-stories'),
		));
	
	endif;
}
add_action( 'wp_enqueue_scripts', 'enqueue_functions_js' );



// Show more posts with ajax
function show_more_posts_ajax() {
	//global $wp_query;
	//global $post;
	$posts_per_page = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
	$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
	
	header("Content-Type: text/html");
	
	$args = array(
		'suppress_filters' => true,
		'post_type' => 'post',
		'posts_per_page' => $posts_per_page,
		'paged' => $page,
	);
	
	$loop = new WP_Query($args);
	
	$twitter_icon = get_field('twitter_icon', 'option');
	$facebook_icon = get_field('facebook_icon', 'option');
	$linkedin_icon = get_field('linkedin_icon', 'option');
	
	$output = '';
	
	if( $loop->have_posts() ) :
	
		while( $loop->have_posts() ) : $loop->the_post();
	
			$twitter_icon = get_field('twitter_icon', 'option');
			$facebook_icon = get_field('facebook_icon', 'option');
			$linkedin_icon = get_field('linkedin_icon', 'option');

	
			if( has_post_thumbnail() ) :

				$thumb = get_the_post_thumbnail();

			else :

				$fallback_featured_image = get_field('fallback_featured_image', 'option');
				$thumb = '<img src="' . $fallback_featured_image['url'] . '" alt="' . $fallback_featured_image['alt'] . '" />';

			endif;
	
			$post_excerpt = get_field('post_intro_text');
	
			$social_sharing = '';
	
			if( $twitter_icon || $facebook_icon || $linkedin_icon ) :
	
				$social_sharing .= '<div class="share-buttons">';
	
				$social_sharing .= '	<div class="menu">';
	
				if( $twitter_icon ) :
	
				$social_sharing .= '		<li class="icon">';
	
				$social_sharing .= '			<a href="https://twitter.com/share?url=' . get_permalink() . '&text=' . get_the_title() . '" target="_blank">';
	
				$social_sharing .= '				<img src="' . $twitter_icon['url'] . '" alt="' . $twitter_icon['alt'] . '" height="28" width="28" />';	
	
				$social_sharing .= '			</a>';
	
				$social_sharing .= '		</li>';
	
				endif;
	
				if( $facebook_icon ) :
	
				$social_sharing .= '		<li class="icon">';
	
				$social_sharing .= '			<a href="http://www.facebook.com/sharer.php?u=' . get_permalink() . '" target="_blank">';
	
				$social_sharing .= '				<img src="' . $facebook_icon['url'] . '" alt="' . $facebook_icon['alt'] . '" height="28" width="28" />';	
	
				$social_sharing .= '			</a>';
	
				$social_sharing .= '		</li>';
	
				endif;
	
				if( $linkedin_icon ) :
	
				$social_sharing .= '		<li class="icon">';
	
				$social_sharing .= '			<a href="http://www.linkedin.com/shareArticle?mini=true&' . get_permalink() . '" target="_blank">';
	
				$social_sharing .= '				<img src="' . $linkedin_icon['url'] . '" alt="' . $linkedin_icon['alt'] . '" height="28" width="28" />';	
	
				$social_sharing .= '			</a>';
	
				$social_sharing .= '		</li>';
	
				endif;
	
				$social_sharing .= '	</div>';
	
				$social_sharing .= '</div>';
					
			endif;
	
			echo '<div class="grid-item medium-6 large-4 cell">';

				echo '<div class="post-archive-item">';

					echo '<a href="' . get_permalink() . '">';

						echo $thumb;

					echo '</a>';

					echo '<div class="post-archive-item-inner">';

						echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
	
						echo '<div class="post-date">' . get_the_time('F j, Y') . '</div>';
	
						echo '<div class="post-excerpt">' . $post_excerpt . '</div>';
	
						echo $social_sharing;

					echo '</div>';

				echo '</div>';

			echo '</div>';
	
		endwhile;
	
	endif;
	
	wp_reset_postdata();
	
	wp_die();
	
}
add_action('wp_ajax_nopriv_show_more', 'show_more_posts_ajax');
add_action('wp_ajax_show_more', 'show_more_posts_ajax');


// Allow SVGs to be uploaded to media galler
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');