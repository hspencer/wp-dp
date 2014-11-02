<?php
add_action( 'after_setup_theme', 'dp_setup' );

function dp_setup()
{
	load_theme_textdomain( 'dp', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form' ) );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'dp' ) )
		);
	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside','chat', 'gallery', 'link', 'image', 'quote', 'status', 'video'
		) );

	// add post-formats to post_type 'page'
	add_post_type_support( 'post', 'post-formats' );
}

add_action( 'wp_enqueue_scripts', 'dp_load_scripts' );

function dp_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'dp_enqueue_comment_reply_script' );

function dp_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'dp_title'	 );

function dp_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'dp_filter_wp_title' );

function dp_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'dp_widgets_init' );


function dp_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'dp' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<div id="%1$s" class="col-sm-6 widget-container %2$s"><div class="well">',
		'after_widget' => "</div></div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) 
	);
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'wide',
		'id' => 'wide-widget-area',
		'before_widget' => '<div id="%1$s" class="col-sm-12 widget-container %2$s"><div class="well">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'for singles',
		'id' => 'single-widget-area',
		'before_widget' => '<div class="col-sm-6"><div id="%1$s" class="well widget-container %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'for pages',
		'id' => 'pages-widget-area',
		'before_widget' => '<div id="%1$s" class="col-sm-6 widget-container %2$s"><div class="well">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'clean',
		'id' => 'clean-widget-area',
		'before_widget' => '<div id="%1$s" class="col-sm-6 widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
}

function dp_custom_pings( $comment )
{
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}
add_filter( 'get_comments_number', 'dp_comments_number' );

function dp_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

/*
add_action('init', 'registerWidePosts');
function registerWidePosts() {
	register_post_type('wide', array(
		'label' => 'Wide posts',
		'description' => 'This is a wide post that uses both columns',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'wide', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','tags'),
		'labels' => array (
			'name' => 'wide posts',
			'singular_name' => 'wide',
			'menu_name' => 'Wide Posts',
			'add_new' => 'Add Wide',
			'add_new_item' => 'Add Wide Post',
			'edit' => 'Edit',
			'edit_item' => 'Edit Wide',
			'new_item' => 'New Wide',
			'view' => 'View Wide',
			'view_item' => 'View Wide',
			'search_items' => 'Search Wide Posts',
			'not_found' => 'No Wide Posts Found',
			'not_found_in_trash' => 'No Wide Posts Found in Trash',
			'parent' => 'Parent Wide',
			)
		) ); 
}
*/
require_once('wp_bootstrap_navwalker.php');

