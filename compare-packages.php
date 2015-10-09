<?php
/**
 * Template Name: Compare Packages
 *
 * This is the template that displays Compare Packages Resut
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<div class="entry-content">
					<?php 
					if(isset($_GET['id'])){
						$_packageComIDs = explode(',',$_GET['id']);
						if(is_array($_packageComIDs)){
							echo compare_packages($_packageComIDs);
						}else{
							echo 'No Package Found';
						}
					}else{
						//echo 'No Package Found';
						echo do_shortcode( '[pricing-grid]' );
					}
					?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</article><!-- #post -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>