<?php
/**
 * Tailwind Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tailwind_Starter
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function tailwind_starter_setup() {
	load_theme_textdomain( 'tailwind-starter', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Menús de navegación
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tailwind-starter' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'tailwind_starter_custom_background_args',
			array(
				'default-color' => 'ffffff',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'tailwind_starter_setup' );


function tailwind_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tailwind_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'tailwind_starter_content_width', 0 );

/**
 * Register widget area.
 */
function tailwind_starter_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tailwind-starter' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tailwind-starter' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tailwind_starter_widgets_init' );


function tailwind_starter_enqueue_styles() {
	
	wp_enqueue_style(
		'tailwind-compiled',
		get_template_directory_uri() . '/assets/css/dist.css',
		array(),
		'1.0'
	);

	
	wp_enqueue_style(
		'custom-fonts',
		get_template_directory_uri() . '/assets/fonts/fonts.css',
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'tailwind_starter_enqueue_styles' );

function tailwind_starter_enqueue_scripts() {
	wp_enqueue_script( 'tailwind-starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tailwind_starter_enqueue_scripts' );
