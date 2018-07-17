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

if ( ! function_exists( 'lccc_stories_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function lccc_stories_setup() {

		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LCCC Framework, use a find and replace
	 * to change 'lccc-framework' to the name of your theme in all the template files
	 */
		load_theme_textdomain( 'lccc-framework', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'lccc-framework' ),
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
		add_theme_support( 'custom-background', apply_filters( 'lccc_stories_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // lccc_stories_setup
add_action( 'after_setup_theme', 'lccc_stories_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function lccc_stories_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lccc-framework' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'lccc_stories_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lccc_stories_scripts() {

 // Add Genericons, used in the main stylesheet.
	 wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	 wp_enqueue_style( 'foundation',  get_template_directory_uri() . '/foundation-643/css/foundation.css' );

		wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation-643/js/vendor/foundation.js', array( 'jquery' ), '1', true );
		wp_enqueue_script( 'foundation-whatinput', get_template_directory_uri() . '/foundation-643/js/vendor/what-input.js', array( 'jquery' ), '1', true);

		wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );

		wp_enqueue_script( 'lorainccc-function-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );

		wp_localize_script( 'lorainccc-function-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );

}
add_action( 'wp_enqueue_scripts', 'lccc_stories_scripts' );

function lorainccc_subsite_scripts() {
	wp_enqueue_style( 'lorainccc_stories-style', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lorainccc_subsite_scripts', 99 );

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