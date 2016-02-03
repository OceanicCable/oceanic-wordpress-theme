<?php
/**
 * Template Name: Divi Homepage Page Builder
 *
 * Description: A page template for Homepage
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $grid_content;
get_header(); ?>

	<?php
	$t_ids = get_settings('teaser_ids');
	$promo_id = get_settings('promo_id');
	$teaser_ids = explode(",", $t_ids);
	package_teaser($teaser_ids);
	?>
	<?php promo($promo_id); ?>

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