<?php
/**
 * nickrosen functions and definitions
 *
 * @package nickrosen
 */
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'nickrosen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nickrosen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nickrosen, use a find and replace
	 * to change 'nickrosen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nickrosen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nickrosen' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nickrosen_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nickrosen_setup
add_action( 'after_setup_theme', 'nickrosen_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function nickrosen_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer social icons',
		'id'            => 'footer_social',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'nickrosen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nickrosen_scripts() {
	wp_enqueue_style( 'nickrosen-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'nickrosen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'nickrosen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

  wp_enqueue_script( 'nickrosen-js', get_template_directory_uri() . '/js/all.js', array('jquery'), '20140517', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nickrosen_scripts' );

/*
 *Custom post types
 */
function nickrosen_post_types() {
  register_post_type( 'discography',
    array(
      'labels' => array(
        'menu_name' => 'Discography',
        'name' => 'Records',
        'singular_name' => 'Record'
      ),
      'public' => true,
      'supports' => array(
        'title', 'thumbnail', 'page-attributes'
      )
    )
  );
  register_post_type( 'tracks',
    array(
      'label' => 'Tracks',
      'public' => true,
      'supports' => array(
        'title', 'editor', 'page-attributes'
        ),
    )
  );
  register_post_type( 'videos',
    array(
      'label' => 'Videos',
      'public' => true,
      'supports' => array(
        'title', 'editor', 'page-attributes'
        ),
    )
  );
  register_post_type( 'schedule',
    array(
      'labels' => array(
        'menu_name' => 'Schedule',
        'name' => 'Events',
        'singular_name' => 'Event'
      ),
      'public' => true,
      'supports' => array(
        'title',
      )
    )
  );
}
add_action('init', 'nickrosen_post_types');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
