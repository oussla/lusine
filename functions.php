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


	register_nav_menus(array(
		'footer_menu' => 'Footer Menu'
	));


	/**
	 * Remove bunks of unused styles and code
	 */
	remove_action('wp_head', 'add_css_head');
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

}
endif;
add_action( 'after_setup_theme', 'lusine_setup' );



/**
 * Enqueue scripts and styles.
 */
function lusine_scripts() {

	/**
	 * Activate gallery scripts on new templates 
	 */
	if (is_page_template( 'templates/gallery.php' )) {  
		wp_enqueue_style( 'resi-lightbox-css', get_template_directory_uri() . '/css/magnific-popup.css' ); 
		wp_enqueue_script( 'resi-images-loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array(), false, true );
		wp_enqueue_script( 'resi-masonry', get_template_directory_uri() . '/js/masonry.pkgd.js', array(), false, true );
		wp_enqueue_script( 'resi-masonry-scripts', get_template_directory_uri() . '/js/masonry.script.js', array(), false, true );
		wp_enqueue_script( 'resi-lightbox', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), false, true );
		wp_enqueue_script( 'resi-lightbox-popup', get_template_directory_uri() . '/js/lightbox.script.js', array('jquery'), false, true ); 
	}

}

add_action( 'wp_enqueue_scripts', 'lusine_scripts' );