<?php
/**
 * Comma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Comma
 */

/* Rgister Custom Post Type */
require_once( get_template_directory().'/custom-post/index.php' );

/* Rgister Custom Library PHP Files */
require_once get_template_directory() . '/inc/index.php';



if ( ! function_exists( 'comma_theme_setup' ) ) :

	function comma_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Comma-SEW, use a find and replace
		 * to change 'comma-sew' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'comma-sew', get_template_directory() . '/languages' );

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
		register_nav_menu( 'primary', __( 'Primary Menu', 'comma-sew' ) );
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
	}
endif;
add_action( 'after_setup_theme', 'comma_theme_setup' );

/* Urgradre Frontend Jquery For Wordpress */

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_template_directory_uri() . "/assets/vendor/jquery/jquery-3.3.1.min.js", array(), '3.1.1' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', get_template_directory_uri() . "/assets/vendor/jquery/jquery-migrate-3.0.1.min.js", array(), '3.0.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );


/**
 * Enqueue scripts and styles.
 */
function comma_theme_scripts() {

	/* Begin Style */
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/vendor/bootstrap-4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri().'/assets/vendor/fontawesome-5.5/css/all.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/main.css' );
	/* End Style */

	/* Begin Script */
	wp_enqueue_script( 'modernizr-script', get_template_directory_uri().'/assets/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js', '', '', true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri().'/assets/vendor/bootstrap-4.1.3/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'popper-script', get_template_directory_uri().'/assets/vendor/popper/popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main-script', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '', true );
	/* End Script */
}
add_action( 'wp_enqueue_scripts', 'comma_theme_scripts' );