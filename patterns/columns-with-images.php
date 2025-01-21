<?php
/**
 * Title: Columns with circular images
 * Slug: coulter-fse/columns-with-images
 * Categories: featured
 * Block Types: core/image, core/columns
 *
 * @package coulter-fse
 * @since 1.0.0
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"align":"center","width":200,"height":200,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( "https://coulterpeterson.com/wp-content/uploads/2023/06/coulter-pixel2.jpg" ); ?>" alt="" style="object-fit:cover;width:200px;height:200px" width="200" height="200"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'coulter-fse' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'coulter-fse' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:image {"align":"center","width":200,"height":200,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( "https://coulterpeterson.com/wp-content/uploads/2023/06/coulter-pixel2.jpg" ); ?>" alt="" style="object-fit:cover;width:200px;height:200px" width="200" height="200"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"align":"center","width":200,"height":200,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( "https://coulterpeterson.com/wp-content/uploads/2023/06/coulter-pixel2.jpg" ); ?>" alt="" style="object-fit:cover;width:200px;height:200px" width="200" height="200"/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'coulter-fse' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
