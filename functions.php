<?php

/**
 * Enqueue styles
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

/**
 * Shortcodes
 */
function my_translatable_string_shortcode() {
	return __( 'This is a translatable string.', 'coulter-fse' );
}
add_shortcode( 'translatable_string', 'my_translatable_string_shortcode' );

/**
 * Register Blocks
 */
function coulter_theme_register_blocks() {
	$blocks_dir = get_template_directory() . '/blocks/example-block';
	$asset_file = include( $blocks_dir . '/index.asset.php' );

	wp_register_script(
			'example-block-editor',
			get_template_directory_uri() . '/blocks/example-block/index.js',
			$asset_file['dependencies'],
			$asset_file['version']
	);

	wp_register_style(
			'example-block-style',
			get_template_directory_uri() . '/blocks/example-block/style.css',
			[],
			filemtime( $blocks_dir . '/style.css' )
	);

	register_block_type( $blocks_dir . '/block.json' );
}
add_action( 'init', 'coulter_theme_register_blocks' );

/**
 * Ron Swanson Quotes Admin Notice
 */
function custom_rsq_admin_notice__success() {
	$quote = custom_rsq_getQuote('https://ron-swanson-quotes.herokuapp.com/v2/quotes');
	?>
	<div class="notice notice-success" style="display:flex;align-items:center;">
			<img src="<?php echo get_template_directory_uri() . 'assets/images/ron-headshot.jpg'; ?>" height="25px" width="25px" style="display:inline-block;padding-right:10px;">
			<p style="display:inline-block;"><?php echo $quote ?> -Ron Swanson</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'custom_rsq_admin_notice__success' );

function custom_rsq_getQuote($url) {
	$response = wp_remote_get( $url );
	$body = wp_remote_retrieve_body( $response );
	$body = substr($body, 1, -1);
	return $body;
}
