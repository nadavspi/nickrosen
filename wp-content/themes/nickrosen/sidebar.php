<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package nickrosen
 */
?>
	<aside class="sidebar" role="complementary">
    <h1 class="visuallyhidden">Sidebar</h1>
    
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php // default sidebar content can go here ?>
		<?php endif; // end sidebar widget area ?>
	</aside><!-- .sidebar -->
