<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you’d like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $grid_content;
get_header(); ?>

	<div id="primary" class="site-content col_9 column">
		<div id="hot-deals-tab">
			<div id="hot-deals" class="purejs-tabs">
				<div class="tabs">
					<h1>What's Hot</h1>
					<ul>
<<<<<<< HEAD
					<?php whats_hot_tabs(); ?>
=======
<<<<<<< HEAD
					<?php whats_hot_tabs(); ?>
=======
						<?php whats_hot_tabs(); ?>
>>>>>>> origin/master
>>>>>>> origin/master
					</ul>
				</div>
				<div class="tabscontent">
					<?php whats_hot_tabs_content(); ?>
				</div>
			</div><!-- #hot-deals -->
		</div><!-- #hot-deals -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>

<?php get_footer(); ?>