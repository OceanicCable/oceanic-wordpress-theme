<?php
/**
 * Twenty Twelve functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 625;

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Twelve supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'twentytwelve' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 200, 200, true ); 

	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'around-hawaii', 290, 9999, false );
		add_image_size( 'gallery-crop', 200, 200, true );
	}

}
add_action( 'after_setup_theme', 'twentytwelve_setup' );

/**
 * Adds support for a custom header image.
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Adds JavaScript for handling the navigation menu hide-and-show behavior.
	 */
	wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );

	/*
	 * Loads our special font CSS file.
	 *
	 * The use of Open Sans by default is localized. For languages that use
	 * characters not supported by the font, the font can be disabled.
	 *
	 * To disable in a child theme, use wp_dequeue_style()
	 * function mytheme_dequeue_fonts() {
	 *     wp_dequeue_style( 'twentytwelve-fonts' );
	 * }
	 * add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );
	 */

	/* translators: If there are characters in your language that are not supported
	   by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'twentytwelve' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		   this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'twentytwelve' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400italic,700italic,400,700',
			'subset' => $subsets,
		);
		wp_enqueue_style( 'twentytwelve-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
	}

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'twentytwelve-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'twentytwelve_scripts_styles' );

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );

/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentytwelve_page_menu_args' );

/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-footer',
		'description' => __( 'Appears on Footer area.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col_4 column">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Special Offer Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-special-offer',
		'description' => __( 'Appears on Footer area.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col_8 column">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentytwelve_widgets_init' );

if ( ! function_exists( 'twentytwelve_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></div>
		</nav><!-- #<?php echo $nav_id; ?> .navigation -->
	<?php endif;
}
endif;

if ( ! function_exists( 'twentytwelve_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentytwelve_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'twentytwelve' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'twentytwelve' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'twentytwelve' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentytwelve' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'twentytwelve' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentytwelve' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentytwelve_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Twenty Twelve 1.0
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function twentytwelve_body_class( $classes ) {
	$background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'twentytwelve-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'twentytwelve_body_class' );

/**
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'twentytwelve_content_width' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since Twenty Twelve 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
function twentytwelve_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'twentytwelve_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_customize_preview_js() {
	wp_enqueue_script( 'twentytwelve-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'twentytwelve_customize_preview_js' );

// Add Amazium CSS
function add_css(){
   	if (!is_admin()) {
		wp_enqueue_style('amazium', get_template_directory_uri() . '/css/amazium.css',false,'1.1','all');
		wp_enqueue_style('flexnav-css', get_template_directory_uri() . '/css/flexnav.css',false,'1.1','all');
		wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css',false,'1.1','all');
		wp_enqueue_style('fontawesomeie', get_template_directory_uri() . '/css/font-awesome-ie7.min.css',false,'1.1','all');
		wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/css/flexslider.css',false,'1.1','all');
		wp_enqueue_style('modal-css', get_template_directory_uri() . '/css/modal.css',false,'1.1','all');
		if(is_front_page()){
			wp_enqueue_style('tabs-css', get_template_directory_uri() . '/css/tabs.css',false,'1.1','all');
		}
   	}
}
add_action('wp_enqueue_scripts','add_css');

function add_scripts() {

    if (!is_admin()) {   	

    	wp_enqueue_script('jquery-ui', '//code.jquery.com/ui/1.10.4/jquery-ui.js', '', '1.0', true);

		wp_enqueue_script('flexnav-js', get_template_directory_uri() . '/js/jquery.flexnav.min.js', '', '1.0', true);
		wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider.js', '', '1.0', true);
		wp_enqueue_script('classie-js', get_template_directory_uri() . '/js/classie.js', '', '1.0', true);
		wp_enqueue_script('modals', get_template_directory_uri() . '/js/modals.js', '', '1.0', true);

		if(is_front_page()){
			wp_enqueue_script('tabs-js', get_template_directory_uri() . '/js/tabs.js', '', '1.0', true);
		}
	}
}
add_action('wp_enqueue_scripts', 'add_scripts');

$grid_content = 8;
$grid_sidebar = 4;

// Metabox
include('metabox.php');

// Initialize the metabox class
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'lib/metabox/init.php' );
    }
}

// flexslider
function custom_flexslider( $id, $type, $order, $orderby, $limit ) {
    $args=array(
      'post_type' => $type,
      'order' => $order,
      'orderby' => $orderby,
      'post_status' => 'publish',
      'posts_per_page' => $limit,
      'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        echo '<div id="'.$id.'" class="flexslider">';
        echo '  <ul class="slides">';
                    while ($my_query->have_posts()) : $my_query->the_post();
                        echo '<li>';
                        echo '<a href="'.get_permalink().'" title="'.get_the_title().'">';
                            the_post_thumbnail('');
                        echo '</a>';
                        echo '</li>';
                    endwhile;
        echo '  </ul>';
        echo '</div>';
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
}

function from_around_hawaii(){
	global $post;
    // Category Parameters
	$args = array(
		'post_type' => 'page', 
		'post_parent' => 23,
		//  'posts_per_page' => 5,
		//  'caller_get_posts'=> 1
	);
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
    	echo '<div id="community" class="flexslider">';
    	echo '<ul class="slides">';
        while ($my_query->have_posts()) : $my_query->the_post();
       		echo '<li>';
            echo '<div class="around-hawaii">';
            echo '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'">';
                // the_post_thumbnail( array(190, 100) );
                the_post_thumbnail('around-hawaii');
            echo '</a>';
            echo '</div>';
            echo '</li>';
        endwhile;
        echo '</ul>';
        echo '</div>';
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
}

function special_offers($catid, $limit){
	global $post;
    $args=array(
      'cat' => $catid,
      'order' => 'asc',
      'orderby' => 'menu_order',
      'post_type' => 'any',
      'post_status' => 'publish',
      'posts_per_page' => $limit,
      'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
    	echo '<div id="offers" class="flexslider">';
    	echo '<ul class="slides">';
        while ($my_query->have_posts()) : $my_query->the_post();
       		echo '<li>';
            echo '<div class="special-offer">';
            echo '<a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
                the_post_thumbnail('fullsize');
            echo '</a>';
            echo '</div>';
            echo '</li>';
        endwhile;
        echo '</ul>';
        echo '</div>';
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
}

function whats_hot_tabs() {
	$args = array (
    'type' => 'post',
    'parent' => 80,
    'orderby' => 'slug',
    'taxonomy' => 'category',
    'hide_empty' => 1 //shows empty categories
	);
	$categories = get_categories( $args );
	$i = 1;
	foreach ($categories as $category) {
	    echo '<li id="tabHeader_'.$i.'" title="'.$category->name.'">';
	    if (function_exists('z_taxonomy_image_url')) {
	    	$icon = z_taxonomy_image_url($category->cat_ID);
	    	if(!empty($icon)){
	    		$url = $icon;
	    	} else {
	    		$url = get_bloginfo('stylesheet_directory').'/images/icon-default.png';
	    	}
	    }
	    //first get the current category ID
		$cat_id = $category->cat_ID;
		//then i get the data from the database
		$cat_data = get_option("category_$cat_id");
		//and then i just display my category image if it exists
		if (isset($cat_data['cat_url'])){
			$caturl = $cat_data['cat_url'];
		} else {
			$caturl = "/";
		}
	    echo '<span class="icon" style="background-image: url('.$url.')"></span>';
	    echo '<a href="'.$caturl.'" title="'.$category->name.'"><span class="title">'.$category->name.'</span></a>';
	    echo '</li>';
	    $i++;
	}
}

function whats_hot_tabs_content() {
	$args = array (
    'type' => 'post',
    'parent' => 80,
    'order' => 'asc',
    'orderby' => 'slug',
    'taxonomy' => 'category',
    'hide_empty' => 1 //shows empty categories
	);
	$categories = get_categories( $args );
	$i = 1;
	foreach ($categories as $category) {
	    echo '<div class="tabpage" id="tabpage_'.$i.'">';
		//echo '<h2>'.$category->name.'</h2>';
		echo '<div>';
		$cat_slug = $category->slug;
		$post_args = array(
	      	'category_name' => $cat_slug,
	      	'post_type' => 'any',
	      	'post_status' => 'publish',
	      	'order' => 'asc',
    		'orderby' => 'menu_order',
	      	'posts_per_page' => 2,
	      	'caller_get_posts'=> 1
	    );
		$my_query = null;
	    $my_query = new WP_Query($post_args);
	    if( $my_query->have_posts() ) {

	        while ($my_query->have_posts()) : $my_query->the_post();
	            echo '<div>';
	            // $tab_title = get_the_title();
	            // $title_len = strlen($tab_title);
	            // if($title_len > 12 ){
	            // 	$title = substr($tab_title, 0, 12).'..';
	            // } else {
	            // 	$title = $tab_title;
	            // }
	            echo '<h2><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h2>';
	            echo '<a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_post_thumbnail($post->ID,'small').'</a>';
	            $excerpt = get_the_excerpt();
	            if($excerpt) {
	            	echo '<p>'.$excerpt.'</p>';
	            }
	            echo '<a href="'.get_permalink().'" title="'.get_the_title().'" id="learn-more-id-'.get_the_id().'" class="rm">Learn More <span class="icon"></span></a>';
	            if ( is_user_logged_in() ) {
	            	echo '<a href="'.get_edit_post_link().'" title="Edit '.get_the_title().'" class="edit-post">Edit</a>';
	        	}
	            echo '</div>';
	        endwhile;
	    }
	    wp_reset_query();  // Restore global post data stomped by the_post().
	    echo '</div>';
	    $i++;
	    echo '</div>';
	}
}

function playing_now($atts){
	extract(shortcode_atts(array(
      'category' => 0,
      'posttype' => 'any',
      'showdate' => 0,
      'showcontent' => 0
   	), $atts));

	global $post;
    $args=array(
      'cat' => $category,
      'post_type' => $posttype,
      'post_status' => 'publish',
      'orderby' => 'menu_order',
      'posts_per_page' => -1,
      'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    $output = "";
    if( $my_query->have_posts() ) {
    	$output .='<div id="now-playing">';
        while ($my_query->have_posts()) : $my_query->the_post();
        	$pay_per_view = get_post_meta($post->ID, "rb-pay-per-view", true);
            $output .='<div class="now-playing">';
            $output .='<strong>';
            $output .= get_the_title($post->ID);
            $output .='</strong>';
            $output .='<div class="movie-thumb">';
            $output .='<a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
            $output .= get_the_post_thumbnail($post->ID,'fullsize');
			$output .='</a>';
            if($showdate == 1){
            	$output .='<strong class="item-date">'.get_the_date('F j').'</strong>';
            }
            $output .='</div>';
            if(!empty($pay_per_view)){
				$output.='<img src="'.get_bloginfo('stylesheet_directory').'/images/ppv.gif" alt="" />';
			}
			if($showcontent == 1){
				$gtcontent = get_the_content();
				$fcontent = apply_filters( 'the_content', $gtcontent );
				$pcontent = str_replace( ']]>', ']]&gt;', $fcontent );
            	$output .='<div class="movie-desc">'.$pcontent.'</div>';
            }
            $output .='</div>';
        endwhile;
        $output .='</div>';
        return $output;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
}
add_shortcode('now_playing', 'playing_now');

function show_monthly($atts){
	extract(shortcode_atts(array(
      'category' => 0,
      'posttype' => 'any',
   	), $atts));

	global $post;
    $args=array(
      'cat' => $category,
      'post_type' => $posttype,
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    $output = "";
    if( $my_query->have_posts() ) {
    	$output .='<div id="monthly-show">';
        while ($my_query->have_posts()) : $my_query->the_post();
        	$pay_per_view = get_post_meta($post->ID, "rb-pay-per-view", true);
            $output .='<div class="show">';
            $output .='<a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
            $output .= get_the_post_thumbnail($post->ID,'thumbnail');
			$output .='</a>';
			$output .='<p>'.get_the_title($post->ID).'</p>';
			$output .='</div>';
        endwhile;
        $output .='</div>';
        return $output;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
    wp_reset_postdata();
}
add_shortcode('monthly_show', 'show_monthly');

function top_questions($slug){
	global $post;
    $args=array(
	'tag' => $slug,
    'cat' => 39,
    'post_type' => 'any',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    $output = "";
    if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post();
      		//$posttags = get_the_tags($post->ID);
		    // if ($posttags) {
		    //     foreach($posttags as $tag) {
		    //         $output .= $tag->name;
		    //     }
		    // }
			$output .= '<li><p>';
			$output .= get_the_title($post->ID);
			$output .= '</p>';
			$output .= '<div class="flyout">';
			$output .= '<a href="#" title="Close" class="close">Close</a>';
			$output .= '<div class="flyout-box">';
			$output .= '<strong>'.get_the_title($post->ID).'</strong>';
			$output .= '<p>'.get_the_content($post->ID).'</p>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</li>';
        endwhile;
        return $output;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
}

function get_current_url() {
  	$file_name = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  	return dirname($file_name);
}

function sidebar_subposts($parent) {
    $args=array(
      	'post_type' => 'product',
      	'post_parent' => $parent,
      	'post_status' => 'publish',
      	'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        echo '  <ul>';
                    while ($my_query->have_posts()) : $my_query->the_post();
                        echo '<li>';
                        echo get_the_title($post->ID);
                        echo '</li>';
                    endwhile;
        echo '  </ul>';
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
}

function get_the_slug( $id=null ){
  	if( empty($id) ):
    	global $post;
    if( empty($post) )
      	return ''; // No global $post var available.
    	$id = $post->ID;
  	endif;

  	$slug = basename( get_permalink($id) );
  	return $slug;
}

add_action( 'init', 'register_oceanic_menus' );
function register_oceanic_menus() {
    register_nav_menus(
        array(
            'sidebar' => __( 'Sidebar Menu' )
        )
    );
}

// This theme uses a custom image size for featured images, displayed on "standard" posts.
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 300, true ); 
add_image_size( 'around-hawaii', 290, 9999, false );
add_image_size( 'thumb', 300, 300, true );

// CATEGORY URL FEATURE

//add extra fields to category edit form hook
add_action ( 'edit_category_form_fields', 'extra_category_fields');

//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="cat_Image_url"><?php _e('Category Url'); ?></label></th>
		<td><input type="text" name="Cat_meta[cat_url]" id="Cat_meta[img]" size="3" style="width:60%;" value="<?php echo $cat_meta['cat_url'] ? $cat_meta['cat_url'] : ''; ?>"><br />
	        <span class="description"><?php _e('Url for category'); ?></span>
		</td>
	</tr>
	<?php
}

// save extra category extra fields hook
add_action ( 'edited_category', 'save_extra_category_fileds');

// save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}

// FLEXSLIDER WIDGET
add_action( 'widgets_init', 'my_widget' );


function my_widget() {
	register_widget( 'MY_Widget' );
}

class MY_Widget extends WP_Widget {

	function MY_Widget() {
		$widget_ops = array( 'classname' => 'example', 'description' => __('Custom Flexslider Widget ', 'example') );

		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'example-widget' );

		$this->WP_Widget( 'example-widget', __('Example Widget', 'example'), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title'] );
		$categoryid = $instance['categoryid'];
		$limit = $instance['limit'];

		echo $before_widget;

		// Display the widget title
		if ( $title ) {
			echo $before_title . $title . $after_title;
		}

		if (empty($categoryid)) {
			$categoryid = 10;
		}

		if (empty($limit)) {
			$limit = -1;
		}

		special_offers($categoryid, $limit);

		echo $after_widget;
	}

	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['categoryid'] = strip_tags( $new_instance['categoryid'] );
		$instance['limit'] = strip_tags( $new_instance['limit'] );

		return $instance;
	}

	//Form UI
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 'title' => __('Example', 'example'), 'name' => __('Bilal Shaheen', 'example'), 'show_info' => true );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input. -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<!-- Text Input. -->
		<p>
			<label for="<?php echo $this->get_field_id( 'categoryid' ); ?>"><?php _e('Category ID:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'categoryid' ); ?>" name="<?php echo $this->get_field_name( 'categoryid' ); ?>" value="<?php echo $instance['categoryid']; ?>" style="width:100%;" />
		</p>


		<!-- Checkbox. -->
		<p>
			<label for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php _e('Limit:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" value="<?php echo $instance['limit']; ?>" style="width:100%;" />
		</p>

	<?php
	}
}

function promo($id) {	

	$post_7 = get_post($id); 
	$title = $post_7->post_title;
	$content = $post_7->post_content;
	$promo_vid = get_post_meta($id, "rb-promo_vid", true);
	$edit_link = get_edit_post_link($id);

	echo'<div id="maxx-promo">';
    echo'    <h4>' . $title . '</h4>';
	echo'	<div id="promo-video">';
    echo'		<video controls>';
    echo'       	<source src="'.$promo_vid.'" type="video/mp4">';
    echo'        	Your browser does not support the video tag.';
    echo'    	</video>';
    echo'	</div>';
    echo'	<div id="promo-info">';
    echo			autop($content);
    if(is_user_logged_in()){
    	echo '<a href="'.$edit_link.'" title="'.$title.'" class="edit-link">Edit Promo</a>';
    }    
    echo'	</div>';
	echo '</div>';
}

function autop($raw) {
  $fcontent = apply_filters( 'the_content', $raw );
  $pcontent = str_replace( ']]>', ']]&gt;', $fcontent );
  return $pcontent;
}

function pricing_grid($atts){

	extract(shortcode_atts(array(
      'order' => 'ASC',
      'orderby' => 'menu_order',
      'limit' => -1,
   	), $atts));

	$output = '';
	// Arguments
	$args=array(
	    'post_type' => 'packages',
	    'order' => $order,
	    'orderby' => $orderby,
	    'post_status' => 'publish',
	    'posts_per_page' => $limit,
	    'caller_get_posts'=> 1
	  );

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
	  $output .= '<div id="sort-filter">';
	  $output .= '	<div class="sort-filter-box">';
	  $output .= '		<h2>Select and Compare Services</h2>';
	  $output .= '		<div class="filter">';
	  $output .= '			<label><input class="type-filter" type="checkbox" name="tv-filter" value="TV"> TV</label>';
	  $output .= '			<label><input class="type-filter" type="checkbox" name="internet-filter" value="Internet"> Internet</label>';
	  $output .= '			<label><input class="type-filter" type="checkbox" name="phone-filter" value="Phone"> Phone</label>';
	  $output .= '			<label><input class="type-filter" type="checkbox" name="all-filter" value="all"> All Packages</label>';
	  $output .= '		</div>';
	  $output .= '		<div class="sort">';
	  $output .= '			<select name="sort-items" id="sort-items">';
	  $output .= '				<option value="recommended" selected="">Recommended</option>';
	  $output .= '				<option value="asc">Price Low To High</option>';
	  $output .= '				<option value="desc">Price High To Low</option>';
	  $output .= '			</select>';
	  $output .= '		</div>';
	  $output .= '		<span class="toggle open"></span>';
	  $output .= '	</div>';
	  $output .= '</div>';
	  $output .= '<div id="pricing-grid">';
	  while ( $the_query->have_posts() ) {
	    $the_query->the_post();

		$tags_type = array();
	    $posttags = get_the_tags();
		if ($posttags) {
			$i = 0;
			$tags = "";
			$comma = "";
		  	foreach($posttags as $tag) {
		  		$i++;		  				  		
				$tags .= $tag->name;
				$tags .= ($i < count($posttags) ? ',':'');
				
				$tags_type[] = $tag->name;
		  	}
		}
		if($i == 1){
			$header_class = "single";
		} else if($i == 2) {
			$header_class = "double";
		} else {
			$header_class = "triple";
		}

		$post_id = get_the_ID();

		$price ="";
		$price_before ="";

		$lower_price_label = get_post_meta( get_the_ID(), 'rb-pgrid_lower_price_label', true );
		if(empty($lower_price_label)) {
			$lower_price_label = "New Lower Price";
		}
		$price = get_post_meta( get_the_ID(), 'rb-pgrid_price', true );
		$price_before = get_post_meta( get_the_ID(), 'rb-pgrid_price_before', true );
		$_price_before = explode(".", $price_before);
		$price = explode(".", $price);
		//$tags_tmp = explode(",", $tags);
		$tags_x = implode(" ", $tags_type);

		$term = get_post_meta( $post_id, 'rb-pgrid_term', true );
		if($term == "Per Month for 12 Months"){
			$term = 'per month for<br>12 <span class="tooltipme" title="After 12 months, retail rates apply. No contract required.">months</span>';
		}

		$x++;
	    $output .= '<div class="pricing all '.$tags_x.'" pack_id="'.$post_id.'" pack_type="'.$tags.'" price="'.$price[0].'" arrange="'.$x.'">';
	    $output .= '	<div class="cloddiv"></div>';
	    $output .= '	<div class="inner">';
	    $output .= '		<header class="'.$header_class.'">';
	    $output .= '			<fieldset>';
	    $output .= '				<input type="checkbox" pack_id="'.$post_id.'" value="'.$post_id.'" id="compare-'.$post_id.'" class="compare-check"/>';
	    $output .= '				<label for="compare-'.$post_id.'" class="compare-label">Compare</label>';
	    $output .= '				<a href="/compare-packages/" class="compare-button">Compare</a>';
	    $output .= '			</fieldset>';
	    $output .= '			<div class="type">';
		$output .=					$tags;
	    $output .=				'</div>';
	    $output .= '		</header>';
	    $output .= '		<div class="details">';
	    $output .= '			<div class="desc">';
	    $output .= 				get_the_content();
	    $output .= '			</div>';
	    $output .= '			<hr />';
	    $output .= '			<div class="price">';
	    $output .= '				<span class="h4">';
        $output .= '           			<sup class="dollar-sign">$</sup><span class="dollars">'.$price[0].'</span><sup class="cents">'.(empty($price[1]) ? '00' : $price[1]).'</sup>';
        $output .= '            		<span class="term">'.$term.'</span>';
        $output .= '            	</span>';        
	    $output .= '			</div>';
	    $output .= '			<hr />';
	    $output .= '			<div class="offer">';
	    							if($price_before) {
		$output .= '					<div class="price-before">';
		$output .= '						<p>was</p>';
		$output .= '           				<sup class="dollar-sign">$</sup><span class="dollars">'.$_price_before[0].'</span><sup class="cents">'.(empty($_price_before[1]) ? '00' : $_price_before[1]).'</sup><span class="strike"></span>';
		$output .= '					</div>';
		$output .= '					<div class="price-label"><h2>'.$lower_price_label.'</h2></div>';
	    							} else {
	    $output .= '					<p>'.get_post_meta( $post_id, 'rb-pgrid_esp_offer', true ).'</p>';
									}
	    $output .= '				<small>'.get_post_meta( $post_id, 'rb-pgrid_remarks', true ).'</small>';
	    $output .= '			</div>';
	    $output .= '			<hr />';
	    $output .= '		</div>';
	    $output .= '		<footer class="footer">';
	    $output .= '			<a href="" title="View Details" class="view-details">View Details</a>';

	    $deflink = "https://www.timewarnercable.com/residential/order?qso=1-GD3OW";
	    $btnlink = get_post_meta( $post_id, 'rb-pgrid_ordernow_btn_url', true );

	    $output .= '			<a href="'.(empty($btnlink) ? $deflink : $btnlink).'" title="Order Now" tartget="_blank" class="order-now">Order Now</a>';	    
	    						if(is_user_logged_in()) {
	    $output .= '				<a href="'. get_edit_post_link($post_id).'" title="" class="edit" target="_blank">Edit</a>';							
	    						}
	    $output .= '			<div class="includes">';
	    $output .= '			<h3>Includes:</h3>';
	    $output .= '			<span class="close-parent">Close</span>';
	    $output .= 				get_post_meta( $post_id, 'rb-pgrid_inclusions', true );
	    $output .= '			</div>';
	    $output .= '		</footer>';
	    $output .= '	</div>';
	    $output .= '</div>';
	  }
	  $output .= '</div>';
	  $output .= '<div class="no-package">
					There are no offers available based on the services you selected.
					<br/>Please try a different combination of services.</div>';
	  
	  $output .= ' 
	  <style>
	    .pricing{position: relative;}
	    .no-package{font-size:24px; display:none;color:#4578af;text-align:center;}
	    .cloddiv{display:none;position:absolute; top:0;left:0; width: 100%;height:100%;opacity: 0.8;background-color:#fff;z-index: 2;
			}
	    .unable-this .cloddiv{display:block;-webkit-transition: 1s linear all;
			-moz-transition: 1s linear all;
			-o-transition: 1s linear all;
			transition: 1s linear all;}
		.pricing .inner{z-index:1;}
	    /* .unable-this .inner{background-image:none; background-color:#000;} */
	    
	  </style>
	  
	  ';
	  
	  return $output;
	} else {
	  return '<h3>No Packages Found<h3>';
	}
	/* Restore original Post Data */
	wp_reset_postdata();
}
add_shortcode('pricing-grid', 'pricing_grid');

function compare_packages($id_arr, $_echo = false){

	global $post;

	$j = 0;
	$output = '';	

	$args = array(
	'order' => 'asc',
	'post_type' => 'packages',
	'post__in' => $id_arr
	);

	$no_of_packages = count($id_arr);
	$the_query = "";

	$the_query = new WP_Query($args);	
	
	if ( $the_query->have_posts() ) {
		
		$_comparePlans = array();
		$_planID = array();
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$_postID = (int)$the_query->post->ID;
			//get all the custom meta value and pass to array with the key of POST ID
			$_comparePlans[$_postID] = get_post_meta($_postID,'',true);			
			$_planID[] = $_postID;
		}
		
		//loop base how many package to compare
		/* foreach($_comparePlans as $_package){
			print_r($_package);
			echo '<hr>';
		} */

		$header_class =array('','single','double','triple');
		
		$output .='<table id="compare-packages" class="col-'.$no_of_packages.'">';
		
		//title structure
		$output .='	<thead><tr>';
		foreach($_comparePlans as $_package){
		
			$x++;
			$price ="";
			$price_before ="";

			

			$_price = explode(".", $_package['rb-pgrid_price'][0]); //be sure all data have array zero bec all value was array
			$_price_before = explode(".", $_package['rb-pgrid_price_before'][0]);
			$posttags = get_the_tags($_planID[(int)$i]);

			$output .='			
				<td class="package '.$header_class[count($posttags)].'">
					<h3>';
					
			if ($posttags) {
				$temp_tag =array();
				foreach($posttags as $tag) {
				     $temp_tag[] = $tag->name; 
				}
				$output .= implode(',' ,$temp_tag );
			}
			$output .= '</h3>
						<div class="price">
		    				<span class="h4">
		              			<sup class="dollar-sign">$</sup><span class="dollars">'.$_price[0].'</span><sup class="cents">'.(empty($_price[1]) ? '00' : $_price[1]).'</sup>
		                	</span>
		                	<span class="term">per month for<br>12 <span>months</span></span>
		    			</div>
		    		<div class="new-plan"><a href="'.$_SERVER['HTTP_REFERER'].'" title="Compare New Plan">Compare New Plan</a></div>
		    		<div class="order-now"><a href="https://www.timewarnercable.com/residential/order?qso=1-GD3OW" target="_blank" title="Order Now">Order Now</a></div>
				</td>
			';
			$i++;
		}
		$output .='</tr></thead>';
		
		
		//Special Offers structure
		 $output .= '<tbody>';
		 
		 
		
			$_packageFeatures = array(
				//array('title','tr_class', 'as_col', 'meta_val')
				//array('Special Offers','','th','pgrid_esp_offer'),
				//array('','','', 'pgrid_price_before'),
				// array('','','', 'pgrid_remarks'),
				
				array('TV','type'),
				array('Plans','label','' ,'pgrid_tv_plans'),
				array('Channels Packages','label','', 'pgrid_tv_channel_packages'),
				array('DVR Service','label','', 'pgrid_tv_dvr_service'),
				array('Equipment','label','', 'pgrid_tv_equipment'),
				array('TWC TV® App Access','label','', 'pgrid_tv_twc_tv_app_access'),
				array('TWC TV® Start Over','label','', 'pgrid_tv_start_over'),
				array('TWC TV® Caller ID on TV','label','', 'pgrid_tv_caller_id_on_tv'),
				array('TWC TV® On Demand','label','', 'pgrid_tv_on_demand'),
				
				array('Internet','type'),
				array('Plans','label','', 'pgrid_net_plans'),
				array('Internet - Speeds','label','', 'pgrid_net_speeds'),
				array('Home WiFi','label','', 'pgrid_net_home_wifi'),
				array('WiFi Hotspots','label','', 'pgrid_net_wifi_hotspots'),
				array('Internet Security & Parental Controls','label','', 'pgrid_net_security_parental_controls'),
				
				array('Phone','type'),
				array('Plans','label','', 'pgrid_phone_plans'),
				array('Included Calls','label','', 'pgrid_phone_includedcalls'),
				array('Voicemail','label','', 'pgrid_phone_voicemail'),
				array('13 Calling Features','label','', 'pgrid_phone_13_calling_features'),
				array('International Calling Plans (for an additional charge)','label','', 'pgrid_phone_international_call'),
			);
		
			$_packageNoneVal = array(
				'pgrid_remarks', 'pgrid_price_before'
			);
			
			
			$output .= compare_packages_titleFeatures('Special Offers', count($_planID),'','th');
			//checking for price before and remarks.
		
			//check if all are same()
			$_dataDispl = array();
			foreach($_planID as $_ID){
				$lower_price_label = $_comparePlans[$_ID]['rb-pgrid_lower_price_label'][0];
				$remarks = $_comparePlans[$_ID]['rb-pgrid_remarks'][0];
				$price_bef = $_comparePlans[$_ID]['rb-pgrid_price_before'][0];
				$specialOff = $_comparePlans[$_ID]['rb-pgrid_esp_offer'][0];
				if(empty($lower_price_label)){
					$lower_price_label = "Lowest Price Online";
				}
				if(empty($price_bef)){
					$_dataDispl[] = $specialOff .'<small>'.$remarks.'<small>';
				}else{
					$_priceBef =  explode(".",$price_bef);
					$_dataDispl[] = '
						<div class="price-before">
							<p class="was">was</p>
							<sup class="dollar-sign">$</sup>
							<span class="dollars">'.$_priceBef[0].'</span>
							<sup class="cents">'.(empty($_priceBef[1]) ? '00' : $_priceBef[1]).'</sup>
							<span class="strike"></span>
						</div>
						<div class="price-label">
							<h2>'.$lower_price_label.'</h2>
						</div><small>'.$remarks.'</small>';
				}
			}
			$output .= compare_packages_rowspan( $_dataDispl,count($_planID),'special-offers-data');
			
			
			foreach($_packageFeatures as $_features){				

				//check if all are same()
				$_metVal = array();
				foreach($_planID as $_ID){

					$metVal = $_comparePlans[$_ID]['rb-'.$_features[3]][0];

					if(empty($metVal) || $metVal == "None"){
						/* if(in_array( $_features[3],$_packageNoneVal)){
							$_metVal[] = '';//remove - "dash" by array list
						}else { */
							$_metVal[] = "-";
						//}
					} elseif($metVal == "on"){
						if($_features[3] == "pgrid_net_home_wifi"){
							$wifiRemarks = $_comparePlans[$_ID]['rb-pgrid_net_home_wifi_remarks'][0];
							$_metVal[] = '<span class="check"></span><br>'.$wifiRemarks;
						} else {
							$_metVal[] = '<span class="check"></span>';	
						}
						
					} elseif($_features[3] == "pgrid_tv_plans") {
						$tvPlans = $_comparePlans[$_ID]['rb-pgrid_tv_plans'][0];
						$tvChannels = $_comparePlans[$_ID]['rb-pgrid_tv_channels'][0];
						$_metVal[] = $tvPlans.'<br />'.$tvChannels;
					} else {
						$_metVal[] = $_comparePlans[$_ID]['rb-'.$_features[3]][0];
					}
				}
				
				$_title = $_features[0];
				$_class = empty($_features[1]) ? 'label' : $_features[1];
				$_cols = empty($_features[2]) ? 'td' : $_features[2];
				$_totalPackages = count($_planID);
				$rowspan_class = substr($_features[3],6);
				
				if(compare_packages_emptyval($_metVal) == false){
					if(!empty($_title)){
						$output .= compare_packages_titleFeatures($_title,$_totalPackages,$_class,$_cols );
					}
					if(compare_packages_sameval($_metVal) == true){
						$output .= compare_packages_rowspan( $_metVal[1],$_totalPackages,$rowspan_class);
					} else {
						$output .= compare_packages_rowspan( $_metVal,$_totalPackages,$rowspan_class);
					}
				} else {
					//means title as content but check if the meta val is set
					
					if(!isset($_features[3]))
						$output .= compare_packages_titleFeatures($_title,$_totalPackages,$_class,$_cols );
				}
			
			}
			
		$output .='</tbody></table>';
	
	}
	else {
	 	$output .= "No Package Found";
	}

	

	if($_echo) echo $output;
	wp_reset_postdata();
	
	return $output;	
}


function compare_packages_sameval( $_metaval = array()){
	if (count(array_unique($_metaval)) === 1 && end($_metaval) === 'true'){
		return true;
	}
	return false;
}

function compare_packages_emptyval($_metaval = array()){
	$str_empty = substr('-----------',1,count($_metaval));
	if (strlen(implode($_metaval)) == 0){
		return true;
	}elseif(implode($_metaval) == $str_empty){
		return true;
	}
	return false;
}

function compare_packages_titleFeatures( $_title , $count = 1, $class='label',$cols = 'td'){
	return '<tr class="'.sanitize_title($_title).' '. $class .'"><'.$cols.' colspan="'.$count.'">'.$_title.'</'.$cols.'></tr>';
}

function compare_packages_rowspan( $_title = array(),$count = 0, $class=''){
	
	$_ret = '<tr class="'. $class .'">';
	if(count($_title) == $count){
		foreach($_title as $_text){
			$_ret .= '<td>'.$_text.'</td>';
		}
	}elseif(count($_title) == 1){
		//theres need to colspan = span all total
		$_ret .= '<td colspan="'.$count .'">'.$_text.'</td>';
	}else{
		//theres need to colspan.
		// i dont know.. hahaha
	}
	$_ret .= '</tr>';
	return $_ret;
	
}

function package_teaser($id_arr){

	global $post;

	$args = array(
	'order' => 'asc',
	'post_type' => 'packages',
	'post__in' => $id_arr
	);

	$the_query = "";

	$the_query = new WP_Query($args);	
	
	if ( $the_query->have_posts() ) {

		echo '<div id="package-teaser">';

		while ( $the_query->have_posts() ) {
			$the_query->the_post();

			$price_arr = array();

			$term = get_post_meta( $post->ID, 'rb-pgrid_term', true );
			if($term == "Per Month for 12 Months"){
				$term = 'per month for<br>12 <span class="tooltipme" title="After 12 months, retail rates apply. No contract required.">months</span>';
			}

			$price = get_post_meta( $post->ID, 'rb-pgrid_price', true );
			$price_arr = explode(".", $price);

	
			echo '<div class="package">';
			echo '<div class="package-box">';
			echo '	<h6>'.get_post_meta($post->ID, "rb-pgrid_teaser_title", true).'</h6>';
			echo '	<p>'.get_post_meta($post->ID, "rb-pgrid_teaser_tagline", true).'</p>';
			echo '	<div class="price">';
	        echo '		<div class="dollar-price">';
	        echo '			<sup class="dollar-sign">$</sup><span class="dollars">'.$price_arr[0].'</span>';
	        echo '		</div>';
	        echo '		<div class="cents-term">';
	        echo '			<sup class="cents">'.(empty($price_arr[1]) ? '00' : $price_arr[1]).'</sup>';
	        echo '			<span class="term">'.$term.'</span>';
		    echo '		</div>';
		    echo '	</div>';
		    echo '	<div class="action">';
		    echo '		<a href="'.get_the_permalink($post->ID).'" title="" class="package-button">Shop Offers <span class="icon"></span></a>';
			echo '	</div>';
			if ( is_user_logged_in() ) {
            	echo '<br><a href="'.get_edit_post_link().'" target="_blank" title="Edit '.get_the_title().'" class="edit-post">Edit</a>';
        	}
			echo '</div>';
			echo '</div>';
		}
		echo '<div class="package">';
		echo '	<h6>Most Popular Deals</h6>';
	    echo '	<a href="'.get_settings('deals_link').'" target="_blank" title="" class="package-button">Learn More <span class="icon"></span></a>';
	    		echo '</div>';
		echo '</div>';
	}
}

// Teaser Package IDS
add_filter('admin_init', 'my_general_settings_register_fields'); 

function my_general_settings_register_fields() { 
  	register_setting('general', 'teaser_ids', 'esc_attr'); 
  	add_settings_field('teaser_ids', '<label for="teaser_ids">'.__('Teaser Package IDS' , 'teaser_ids' ).'</label>' , 'my_general_teaser_ids', 'general');

  	register_setting('general', 'promo_id', 'esc_attr'); 
	add_settings_field('promo_id', '<label for="promo_id">'.__('Promo ID' , 'promo_id' ).'</label>' , 'promo_id', 'general');

  	register_setting('general', 'tv_channels', 'esc_attr'); 
	add_settings_field('tv_channels', '<label for="tv_channels">'.__('Channels Pop up' , 'tv_channels' ).'</label>' , 'tv_channels', 'general');

	register_setting('general', 'popup_script', 'esc_attr'); 
	add_settings_field('popup_script', '<label for="popup_script">'.__('Pop up Script' , 'popup_script' ).'</label>' , 'popup_script', 'general');  	

	register_setting('general', 'deals_link', 'esc_attr'); 
	add_settings_field('deals_link', '<label for="deals_link">'.__('Popular Deals Link' , 'deals_link' ).'</label>' , 'deals_link', 'general');

	// register_setting('general', 'threehundred_channels', 'esc_attr'); 
	// add_settings_field('threehundred_channels', '<label for="threehundred_channels">'.__('300+ plus Channels' , 'threehundred_channels' ).'</label>' , 'threehundred_channels', 'general');
} 

function my_general_teaser_ids() { 
  $teaser_ids = get_option( 'teaser_ids', '' ); 
  echo '<input id="teaser_ids" style="width: 35%;" name="teaser_ids" value="' . $teaser_ids . '" />';
}
function tv_channels() { 
  $tv_channels = get_option( 'tv_channels', '' ); 
  echo '<textarea id="tv_channels" name="tv_channels" style="width:100%; min-height:300px;">'. $tv_channels .'</textarea>';
}
function popup_script() { 
  $popup_script = get_option( 'popup_script', '' ); 
  echo '<textarea id="popup_script" name="popup_script" style="width:100%; min-height:200px;">'. $popup_script .'</textarea>';
}
function promo_id() { 
  $promo_id = get_option( 'promo_id', '' ); 
  echo '<input type="text" name="promo_id" style="width:35%;" value="'. $promo_id .'">';
}
function deals_link() { 
  $deals_link = get_option( 'deals_link', '' ); 
  echo '<input id="deals_link" type="text" name="deals_link" style="width:100%" value="'. $deals_link .'" />';
}

function main_class(){
	if ( is_page_template( 'page-templates/divi.php' ) ) {
	    return "";
	} else {
	    return "row";
	}
}
// function threehundred_channels() { 
//   $threehundred_channels = get_option( 'threehundred_channels', '' ); 
//   echo '<textarea id="threehundred_channels" type="text" name="threehundred_channels" style="width:100%; min-height:300px;">'. $threehundred_channels .'</textarea>';
// }