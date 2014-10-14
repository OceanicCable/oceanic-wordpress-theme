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

			<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>

						<div class="entry-content">
							<div id="" class="article-list">
								<?php global $post;
								$catID = get_post_meta($post->ID, "categoryID", true);
						        $args = array( 'numberposts' => -1, 'category' => $catID );
						        $myposts = get_posts( $args );
						        foreach( $myposts as $post ) : setup_postdata($post);
						        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
								<div class="article-item">
								    <div class="article-thumbnail">
										<a href="<?php echo $url; ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
								    </div>
								    <div class="article-text">
								    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								    	<div class="wrap">
								    		<?php the_content(); ?>
								      	</div>
								    </div>
								    <div class="clear"></div>
								</div>
								<?php endforeach; ?>
							</div>
						</div><!-- .entry-content -->
					</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>