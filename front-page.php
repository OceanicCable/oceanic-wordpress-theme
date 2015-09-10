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

	<?php
	$t_ids = get_settings('teaser_ids');
	$teaser_ids = explode(",", $t_ids);
	package_teaser($teaser_ids);
	?>
	<?php promo(12285); ?>

	<div id="primary" class="site-content col_9 column">
		<div id="hot-deals-tab">
			<div id="hot-deals" class="purejs-tabs">
				<div class="tabs">
					<h1>What's Hot</h1>
					<ul>
						<?php whats_hot_tabs(); ?>
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