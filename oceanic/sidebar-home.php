<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="front">
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>	
		<?php dynamic_sidebar( 'sidebar-4' ); ?>	
	<?php endif; ?>
</div><!-- #secondary -->
