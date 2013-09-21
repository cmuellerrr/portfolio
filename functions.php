<?php
/**
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * @package Skele
 * @since Skele 1.0
 */

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 960;

/**
 * Sets up theme defaults and registers the various WordPress features.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since @since Skele 1.0
 */
function skele_setup() {

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'skele_setup' );


/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Skele 1.0
 */
function skele_scripts_styles() {
	global $wp_styles;

	//REGISTER CYCLE
	wp_register_script( 'cycle', 'http://malsup.github.io/jquery.cycle.all.js', array('jquery'), null, false );

	/*
	 * Adds main javascript file.
	 */
	wp_enqueue_script( 'skele-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'cycle'), '1.0', true );

	//REGISTER SKELETON
	wp_enqueue_style( 'skeleton-base', get_template_directory_uri() . "/css/Skeleton/base.css");
	wp_enqueue_style( 'skeleton-skeleton', get_template_directory_uri() . "/css/Skeleton/skeleton.css");
	wp_enqueue_style( 'skeleton-layout', get_template_directory_uri() . "/css/Skeleton/layout.css");

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'skele-style', get_stylesheet_uri(), array('skeleton-base', 'skeleton-skeleton', 'skeleton-layout') );

	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
	wp_enqueue_style( 'skele-ie', get_template_directory_uri() . '/css/ie.css', array( 'skele-style' ), '20121010' );
	$wp_styles->add_data( 'skele-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'skele_scripts_styles' );


/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Skele 1.0
 */
function skele_widgets_init() {
	
}
add_action( 'widgets_init', 'skele_widgets_init' );