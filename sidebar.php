<?php
/**
 * The sidebar containing the main widget area
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */
?>

<?php if ( is_active_sidebar( 'blog_single_sidebar' ) ) : ?>
	<div id="blog-page-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'blog_single_sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>