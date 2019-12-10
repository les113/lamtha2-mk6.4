<?php
#update_option( 'siteurl', 'http://localhost/www/svn_workingcopy/1and1/l2couk/' );
#update_option( 'home', 'http://localhost/www/svn_workingcopy/1and1/l2couk/' );

	register_sidebar( array(
	'name' => __( 'home-recentblogs' ),
	'id' => 'sidebar-1',
	'before_widget' => '',
	'after_widget' => '',
	'after_title'   => '<div class="dashedline"></div>',
) );

	register_sidebar( array(
	'name' => __( 'blogsidebar' ),
	'id' => 'sidebar-2',
	'before_widget' => '',
	'after_widget' => '',
) );

	register_sidebar( array(
	'name' => __( 'home-testimonials' ),
	'id' => 'sidebar-3',
	'before_widget' => '',
	'after_widget' => '',
	'after_title'   => '<div class="dashedline"></div>',
) );

	register_sidebar( array(
	'name' => __( 'home-sidebar' ),
	'id' => 'sidebar-4',
	'before_widget' => '',
	'after_widget' => '',
) );

	register_sidebar( array(
	'name' => __( 'page-sidebar' ),
	'id' => 'sidebar-5',
	'before_widget' => '',
	'after_widget' => '',
) );

	register_sidebar( array(
	'name' => __( 'footer1' ),
	'id' => 'sidebar-6',
	'before_widget' => '',
	'after_widget' => '',
) );

	register_sidebar( array(
	'name' => __( 'footer2' ),
	'id' => 'sidebar-7',
	'before_widget' => '',
	'after_widget' => '',
) );

	register_sidebar( array(
	'name' => __( 'footer3' ),
	'id' => 'sidebar-8',
	'before_widget' => '',
	'after_widget' => '',
) );

	register_sidebar( array(
	'name' => __( 'footer4' ),
	'id' => 'sidebar-9',
	'before_widget' => '',
	'after_widget' => '',
) );

function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'side-menu' => __( 'Side Menu' ),
      'foot-menu' => __( 'Foot Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* disable plugins on all except specific pages */
add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );

function my_deregister_javascript() {
	if ( !is_page('portfolio') ) {
	wp_deregister_script( 'nextgen-gallery' ); // this disables the nextGen plugin on all pages except 'portfolio'
	}
}

/* admin login logo */
function login_logo() {
echo '<style type="text/css">
h1 a {background:url("'.get_bloginfo('template_directory').'/images/logo.png") !important;background-repeat:no-repeat !important;margin:0 0 20px 20px !important;width:100% !important;}
</style>';}
add_action('login_head', 'login_logo');

// hide wp version from page source
remove_action('wp_head', 'wp_generator');

//remove query string from resources (e.g. plugings links to jquery cdn) to enable browser cacheing
function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
        return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

?>