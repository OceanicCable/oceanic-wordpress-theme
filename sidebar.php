<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $grid_sidebar;
wp_reset_query();  // Restore global post data stomped by the_post().
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area col_<?php echo $grid_sidebar; ?> column" role="complementary">
			<aside id="share-module" class="widget widget-share-module">
				<div>
					<h3>Follow Us</h3>
					<ul>
						<li><a href="https://twitter.com/OceanicCable" title="" class="share-twitter" target="_blank"></a></li>
						<li><a href="https://www.facebook.com/OceanicCable" title="" class="share-facebook" target="_blank"></a></li>
						<li><a href="http://www.youtube.com/OceanicCable" title="" class="share-youtube" target="_blank"></a></li>
					</ul>					
				</div>
				<a href="javascript:window.print()" title="" class="button-print">Print</a>
			</aside>			
			<?php
			// if ( 'product' == get_post_type($post->ID) ) {
				
			// 	$ancestors = get_post_ancestors($post->ID);
			//  $root = count($ancestors)-1;
			//  $parent_ID = $ancestors[$root];
				
			// 	$parentSlug = get_the_slug($parent_ID);				
			// 	$parentTitle = get_the_title($parent_ID);
			// 	// echo $parent_ID;
			// 	// echo $parentSlug;
			// 	echo '<aside class="widget">';
			// 	echo '<h2 class="widget-title">'.$parentTitle.'</h2>';
			// 	wp_nav_menu( array('menu' => 'sidebar-'.$parentSlug, 'container_class' => 'oceanic-accordion' ));			
			// 	echo '</aside>';
			// }			

			//if(is_page(array(259,3066,388)) || ($post->post_parent == 259) || ($post->post_parent == 3066) || ($post->post_parent == 388)) {		

			// if(is_page(array(259,3066,388,103))) {
			// 	if ($post->post_parent > 0 ) { 
			// 	    $ancestors = get_post_ancestors($post->ID);
			// 		$root = count($ancestors)-1;
			// 		$parent_ID = $ancestors[$root];				
			// 		$pageSlug = get_the_slug($parent_ID);				
			// 		$widgetTitle = ucfirst($pageSlug);
			// 	} else {
			// 		$pageSlug = get_the_slug($post->ID);
			// 		$widgetTitle = ucfirst($pageSlug);
			// 	}
			// 	echo '<aside class="widget">';
			// 	echo '<h2 class="widget-title">'.$widgetTitle.'</h2>';
			// 		wp_nav_menu( array('menu' => 'sidebar-'.$pageSlug, 'container_class' => 'oceanic-accordion' ));			
			// 	echo '</aside>';				
			// } else {
			// 	$ancestors = get_post_ancestors($post);
			// 	$show_widgets_for = array(259, 3066, 388, 103);
			// 	foreach ($show_widgets_for as $child) {
			// 		if (in_array($child, $ancestors)) {
			// 		    if ($post->post_parent > 0 ) { 
			// 			    $ancestors = get_post_ancestors($post->ID);
			// 				$root = count($ancestors)-1;
			// 				$parent_ID = $ancestors[$root];				
			// 				$pageSlug = get_the_slug($parent_ID);				
			// 				$widgetTitle = ucfirst($pageSlug);
			// 			} else {
			// 				$pageSlug = get_the_slug($post->ID);
			// 				$widgetTitle = ucfirst($pageSlug);
			// 			}
			// 			echo '<aside class="widget a">';
			// 			echo '<h2 class="widget-title">'.$widgetTitle.'</h2>';
			// 				wp_nav_menu( array('menu' => 'sidebar-'.$pageSlug, 'container_class' => 'oceanic-accordion' ));			
			// 			echo '</aside>';
			// 	   	}
			// 	}
			// }		

			//}

			// $pageSlug = get_the_slug($post->ID);
			// $pageSlug = 'sidebar-'.$pageSlug;
			// echo $pageSlug;
			// $result = is_nav_menu($pageSlug);
			// echo $result;

			?>

				<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>