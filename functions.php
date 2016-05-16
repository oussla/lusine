<?php



if ( ! function_exists( 'lusine_setup' ) ) :
/**
 * Sets up theme defaults
 */
function lusine_setup() {

	/*
	 * Make theme available for translation.
	 */
	// load_theme_textdomain( 'lusine', get_template_directory() . '/languages' );
	

	/**
	 * Manage images sizes
	 */
	add_image_size('gallery_small', 250, 250);


	/**
	 * Remove bunks of unused styles and code
	 */
	remove_action('wp_head', 'add_css_head');
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

}
endif;
add_action( 'after_setup_theme', 'lusine_setup' );


