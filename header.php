<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-ico"/>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/validation.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/page.js" type="text/javascript"></script>

<script src="//assets.adobedtm.com/a011e94b6ba81cdcfdf24acdb480b5e4204c4dea/satelliteLib-16b76ef096b5bd53366bd75fb0cfa83784dce635.js"></script>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"url": "http://www.oceanic.com",
	"logo": "http://www.oceanic.com/wp-content/themes/oceanic/images/logo.png",
	"contactPoint" : [
		{ "@type" : "ContactPoint",
			"telephone" : "+1-808-643-2100",
			"contactType" : ["Sales","Customer Service"],
			"contactOption" : "TollFree",
			"availableLanguage" : ["English"]
		} ],
	"sameAs" : [
		"https://en.wikipedia.org/wiki/Oceanic_Time_Warner_Cable",
		"https://www.facebook.com/OceanicCable",
		"https://twitter.com/OceanicCable",
		"http://www.youtube.com/OceanicCable"
	]
}
</script>

<?php wp_head(); ?>

<!-- <script src="<?php //echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js"></script> -->

<!--[if lt IE 9]>
   <script type="text/javascript" src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!--[if lt IE 7 ]>
<style>
.modal {
  /* Netscape 4, IE 4.x-5.0/Win and other lesser browsers will use this */
  position: absolute; left:20%; right:20%; width: 60%; bottom: 10px;
  filter:alpha(opacity=100) !important;
}
.modal-content{
	height:220px;
}
.modal-content button.md-close {
display:block;
float: right;
color:#000000;
}
</style>
<![endif]-->

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed">
	<div id="topbar-container" class="container">
		<?php wp_nav_menu( array( 'menu' => 'top', 'menu_id' => 'top-menu', 'container_class' => 'row' ) ); ?>
	</div>
	<div id="header-container" class="container">
		<header id="masthead" class="site-header row" role="banner">
			<div id="header-sub" class="column">
				<div id="header-links">
					<p>Need help? <a href="http://www.timewarnercable.com/en/residential-home/support/contact-us.html" target="_blank"><strong>Chat with us now</strong></a><br />or visit our <a href="/help-and-support/" title="Help & Support">Help &amp; Support Page</a></p>
					<?php //wp_nav_menu( array( 'menu' => 'top', 'sort_column' => 'menu_order', 'container_class' => 'nav-top' ) ); ?>
				</div>
				<div id="header-search">
					<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
					  	<input class="search-text" type="text" value="Search" name="s" id="s" />
					</form>
				</div>
			</div>
			<div id="logo" class="column">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
			</div> <!-- #logo -->

			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
			<div class="cb"></div>
		</header><!-- #masthead -->
		<div id="nav-container" class="container">
			<div class="row">
				<nav id="site-navigation" class="main-navigation col_12 column" role="navigation">
					<button class="menu-button">Menu</button>
					<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</div><!-- #header-container -->

	<?php if(!is_front_page()) : ?>
	<div id="breadcrumb-container" class="container">
		<div id="breadcrumb" class="row">
			<?php
			$args = array(
					'separator' => '>'
					);
					breadcrumb_trail($args); ?>
		</div>
	</div>
	<?php endif; ?>

	<?php if(is_front_page()) : ?>
		<?php if(is_page_template('page-templates/divi.php')) : ?>
			<?php //the_content(); ?>
		<?php else: ?>
			<div id="slider-container" class="container">
				<div class="row">
					<div class="col_12 column">
						<?php custom_flexslider( 'main-slider', 'main-slides', 'asc', 'menu_order', -1 ); ?>
					</div>
					<span id="ls"></span>
					<span id="rs"></span>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if(is_page_template('banner-page.php')) : ?>
		<div id="banner-page" class="container">
			<?php the_post_thumbnail('fullsize'); ?>
		</div>
	<?php endif; ?>

	<?php if(is_page_template('main.php')) : ?>
		<div id="subpage" class="container">
			<div class="row">
				<div class="col_12 column">
					<?php
					if($post->post_parent)
						$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1&link_before=<span>&link_after=</span>");
					else
						$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1&link_before=<span>&link_after=</span>");
					if ($children) { ?>
					<ul>
						<?php echo $children; ?>
					</ul>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div id="banner-page" class="container" style="background-image: url(<?php echo $thumb_url; ?>)">
			<div class="row">
				<div id="banner-text" class="col_8 column">
					<?php echo get_post_meta($post->ID, "rb-banner-text", true); ?>
				</div>
				<div id="banner-box" class="col_4 column">
					<div id="top-questions">
						<h4>Top Questions</h4>
						<ul>
							<?php
							$tag = $post->post_name."-question";
							echo top_questions($tag); ?>
						</ul>
						<div>
							<a href="" title="">Watch Ad</a>
							<a href="" title="">See Demo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div id="main-container" class="container">
		<div id="main" class="<?php echo main_class(); ?>">			