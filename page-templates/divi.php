<?php
/**
 * Template Name: Divi Page Builder
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'divi' ); ?>
		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>