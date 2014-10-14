<?php
/**
 * Template Name: Category Posts
 *
 * This is the template that displays all posts on a category.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content eight column">
		<div id="content" role="main">

			<?php
			$type = 'products';
			$args=array(
			  'post_type' => $type,
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			  'caller_get_posts'=> 1
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			<?php the_post_thumbnail('thumbnail'); ?>

		</div><!-- #content -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>