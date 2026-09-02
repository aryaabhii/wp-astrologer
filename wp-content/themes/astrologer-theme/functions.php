<?php
/**
 * AstroVeda Theme Functions and Definitions
 *
 * @package AstroVeda
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function astroveda_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'astroveda' ),
		'footer'  => __( 'Footer Navigation', 'astroveda' ),
	) );

	// Switch default core markup to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'astroveda_setup' );

/**
 * Enqueue scripts and styles.
 */
function astroveda_scripts() {
	// Google Fonts
	wp_enqueue_style( 'astroveda-google-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap', array(), null );

	// FontAwesome icons
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

	// Theme Main Stylesheet (with automatic cache busting)
	wp_enqueue_style( 'astroveda-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

	// Main JavaScript
	wp_enqueue_script( 'astroveda-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'astroveda_scripts' );

/**
 * WordPress Customizer Settings for Easy Admin Management
 */
function astroveda_customize_register( $wp_customize ) {
	// Add Astrologer Section
	$wp_customize->add_section( 'astrologer_settings', array(
		'title'    => __( 'Astrologer Site Settings', 'astroveda' ),
		'priority' => 30,
	) );

	// Astrologer Name
	$wp_customize->add_setting( 'astrologer_name', array(
		'default'           => 'Raghu Sharma',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'astrologer_name', array(
		'label'    => __( 'Astrologer Full Name', 'astroveda' ),
		'section'  => 'astrologer_settings',
		'type'     => 'text',
	) );

	// Phone Number
	$wp_customize->add_setting( 'astrologer_phone', array(
		'default'           => '+61 400 000 000',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'astrologer_phone', array(
		'label'    => __( 'Phone Number (Click to Call)', 'astroveda' ),
		'section'  => 'astrologer_settings',
		'type'     => 'text',
	) );

	// WhatsApp Number
	$wp_customize->add_setting( 'astrologer_whatsapp', array(
		'default'           => '61400000000',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'astrologer_whatsapp', array(
		'label'    => __( 'WhatsApp Number (Digits only, e.g. 61400000000)', 'astroveda' ),
		'section'  => 'astrologer_settings',
		'type'     => 'text',
	) );

	// Address / Suburb Location
	$wp_customize->add_setting( 'astrologer_address', array(
		'default'           => 'Adelaide CBD & All Suburbs, SA 5000',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'astrologer_address', array(
		'label'    => __( 'Office Address / Location', 'astroveda' ),
		'section'  => 'astrologer_settings',
		'type'     => 'text',
	) );

	// Contact Email
	$wp_customize->add_setting( 'astrologer_email', array(
		'default'           => 'info@astrologerraghusharma.com.au',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'astrologer_email', array(
		'label'    => __( 'Contact Email Address', 'astroveda' ),
		'section'  => 'astrologer_settings',
		'type'     => 'text',
	) );

	// YouTube Video Embed URL
	$wp_customize->add_setting( 'astrologer_video_url', array(
		'default'           => 'https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?rel=0',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'astrologer_video_url', array(
		'label'    => __( 'Testimonial YouTube Embed URL', 'astroveda' ),
		'section'  => 'astrologer_settings',
		'type'     => 'url',
	) );
}
add_action( 'customize_register', 'astroveda_customize_register' );
