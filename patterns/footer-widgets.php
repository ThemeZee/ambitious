<?php
/**
 * Title: Footer Widgets
 * Slug: ambitious/footer-widgets
 * Inserter: no
*/
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":"4vw","margin":{"bottom":"4vw"}}}} -->
<div class="wp-block-columns" style="margin-bottom:4vw">

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'About Ambitious', 'ambitious' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Ambitious is a next generation block theme built for the new WordPress Full-Site-Editing experience. It comes with a clean and modern design and is packed with features, including a huge range of block patterns, multiple header and footer block template parts and support for global style variants.', 'ambitious' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Categories', 'ambitious' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Archives', 'ambitious' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Stay in touch', 'ambitious' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">

				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
