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
					<ul><!-- 
						<li id="tabHeader_1"><span></span>Special Offers</li>
						<li id="tabHeader_2"><span></span>Movies On Demand</li>
						<li id="tabHeader_3"><span></span>Pay-Per-View</li>
						<li id="tabHeader_4"><span></span>Apps &amp; More</li>
						 -->
						<?php whats_hot_tabs(); ?>
					</ul>
					
				</div>
				<div class="tabscontent">
					<!-- <div class="tabpage" id="tabpage_1">
						<h2>Special Offers</h2>
						<p>Pellentesque habitant morbi tristique senectus...</p>
					</div>
					<div class="tabpage" id="tabpage_2">
						<h2>Movies On Demand</h2>
						<p>Pellentesque habitant morbi tristique senectus...</p>
					</div>
					<div class="tabpage" id="tabpage_3">
						<h2>Pay-Per-View</h2>
						<p>Pellentesque habitant morbi tristique senectus...</p>
					</div>
					<div class="tabpage" id="tabpage_4">
						<h2>Apps &amp; More</h2>
						<p>Pellentesque habitant morbi tristique senectus...</p>
					</div> -->
					<?php whats_hot_tabs_content(); ?>
			    </div>
			</div><!-- #hot-deals -->
		</div><!-- #hot-deals -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>

<?php get_footer(); ?>