<?php
ob_start();
/*********************
INCLUDE NEEDED FILES
*********************/

// LOAD lierphotography CORE (if you remove this, the theme will break)
require_once(get_template_directory().'/library/core-functions.php'); 

// USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
require_once(get_template_directory().'/library/custom-post-type.php'); // you can disable this if you like

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once(get_template_directory().'/library/admin.php'); 

// SUPPORT FOR OTHER LANGUAGES (off by default)
// require_once(get_template_directory().'/library/translation/translation.php'); 

/*********************
MENUS & NAVIGATION
*********************/
// REGISTER MENUS
register_nav_menus(
	array(
		'top-nav' => __( 'The Top Menu' ),   // main nav in header
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ) // secondary nav in footer
	)
);

// THE TOP MENU
function lierphotography_top_nav() {
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Top Menu', 'lierphotography' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'top-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'lierphotography_main_nav_fallback'      // fallback function
	));
} /* end lierphotography main nav */

// THE MAIN MENU
function lierphotography_main_nav() {
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'lierphotography' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'lierphotography_main_nav_fallback'      // fallback function
	));
} /* end lierphotography main nav */

// THE FOOTER MENU
function lierphotography_footer_links() {
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'lierphotography' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'lierphotography_footer_links_fallback'  // fallback function
	));
} /* end lierphotography footer link */

// HEADER FALLBACK MENU
function lierphotography_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// FOOTER FALLBACK MENU
function lierphotography_footer_links_fallback() {
	/* you can put a default here if you like */
}

/*********************
SIDEBARS
*********************/

// SIDEBARS AND WIDGETIZED AREAS
function lierphotography_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'lierphotography'),
		'description' => __('The first (primary) sidebar.', 'lierphotography'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'lierphotography'),
		'description' => __('The offcanvas sidebar.', 'lierphotography'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));*/

	register_sidebar( array(
		'id'            => 'footer-one',
		'name'          => __( 'Footer 1', 'lierphotography' ),
		'description'   => __( 'Widgets in this area are used in the 1st footer column','lierphotography' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'lierphotography' ),
		'id'            => 'footer-two',
		'description'   => __( 'Widgets in this area are used in the 2nd footer column','lierphotography' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'lierphotography' ),
		'id'            => 'footer-three',
		'description'   => __( 'Widgets in this area are used in the 3rd footer column','lierphotography' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</h5>',
	) );

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'lierphotography'),
		'description' => __('The second (secondary) sidebar.', 'lierphotography'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/*********************
COMMENT LAYOUT
*********************/

// Comment Layout
function lierphotography_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix large-12 columns">
			<header class="comment-author">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<?php printf(__('<cite class="fn">%s</cite>', 'lierphotography'), get_comment_author_link()) ?> on
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'lierphotography')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'lierphotography'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'lierphotography') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

?>