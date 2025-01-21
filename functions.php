<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coulter-fse
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function coulter_fse_styles() {
	wp_enqueue_style(
		'coulter-fse-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	// SCSS
	wp_enqueue_style( 
		'coulter-fse-scss',
		get_template_directory_uri() . '/dist/css/style.css', 
		[], 
		filemtime( get_template_directory() . '/dist/css/style.css' ) 
	);
}
add_action( 'wp_enqueue_scripts', 'coulter_fse_styles' );

function my_translatable_string_shortcode() {
	return __( 'This is a translatable string.', 'coulter-fse' );
}
add_shortcode( 'translatable_string', 'my_translatable_string_shortcode' );