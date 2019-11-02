<?php
/**
 * blank.zip functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank.zip
 */

if ( ! function_exists( 'blank_zip_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blank_zip_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on blank.zip, use a find and replace
		 * to change 'blank-zip' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blank-zip', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'blank-zip' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'blank_zip_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'blank_zip_setup' );

function blank_zip_add_editor_style(){
	add_editor_style('dist/css/editor-style.css');
}
add_action('admin_init', 'blank_zip_add_editor_style');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function blank_zip_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'blank_zip_content_width', 1140 );
}
add_action( 'after_setup_theme', 'blank_zip_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function blank_zip_scripts() {
	//boostrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'editor', get_template_directory_uri() . '/dist/css/editor-style.css');
	wp_enqueue_style( 'awesome', get_template_directory_uri() . '/dist/css/animate.min.css');
	//font awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/fontawesome.min.css');

	//jquery
	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bootstrap/js/jquery-3.4.1.min.js');
	// //own style
	// wp_enqueue_style('style', get_template_directory_uri() . '/bootstrap/css/style.css');

	//default
	wp_enqueue_style( 'blank-zip-style', get_stylesheet_uri() );

	// wp_register_script( 'popper', 
	// 'https://cdnjs.cloudeflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', false, '', true);

	// wp_register_script('popper');
	//not done
	// wp_enqueue_script( 'popper', get_template_directory_uri() . '/src/js/popper.min.js',
	// array('jquery'),'20170115', true);

	wp_enqueue_script( 'blank-zip-tether', get_template_directory_uri() . '/src/js/tether.min.js',
	array(),'20170115', true);

	wp_enqueue_script( 'blank-zip-bootstrap', get_template_directory_uri() . '/src/js/bootstrap.min.js', 
	array('jquery'),'20170915', true);

	wp_enqueue_script( 'blank-zip-jquery', get_template_directory_uri() . '/src/js/jquery-3.3.1.slim.min.js', 
	array('jquery'),'20170915', true);

	wp_enqueue_script( 'blank-zip-jquery', get_template_directory_uri() . '/src/js/bootstrap.bundle.min.js', 
	array('jquery'),'20170915', true);
	
	wp_enqueue_style( 'fontawesome2', get_template_directory_uri() . '/fonts/font-awesome/css/all.css');

	wp_enqueue_script( 'blank-zip-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/js/all.js',
	array(),'20170115', true);
	// wp_enqueue_script( 'blank-zip-nav-scroll', get_template_directory_uri() . '/src/js/nav-scroll.js',
	// array('jquery'),'20170115', true);

	wp_enqueue_script( 'blank-zip-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blank_zip_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widgets file.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Bootstrap NavWalker file.
 */
require get_template_directory() . '/inc/bootstrap-bz-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

