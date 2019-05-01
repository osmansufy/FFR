<?php
//Caching issue solution
if ( site_url() == "http://localhost/demo" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}


function ffr_theme_setup (){
    load_theme_textdomain( 'ffr', get_template_directory() . "/languages" );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tags' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
        'comment-list'
    ) );
    $alpha_custom_header_details=array(
        'flex-height' =>true,
        'flex-width' =>true,
    );
    add_theme_support("custom-header",$alpha_custom_header_details);
    $alpha_custom_header_defaults=array(
        "width"=>'90',
    );

    add_theme_support("custom-logo",$alpha_custom_header_defaults);
   
    register_nav_menu( 'primary', __( 'Main Menu', 'ffr' ) );
    

}
add_action( 'after_setup_theme', 'ffr_theme_setup' );
function ffr_assets (){
    //    style
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', null);
    wp_enqueue_style( 'bootstrap-css', '//fonts.googleapis.com/css?family=Dosis:400,500,600,700', null);
    wp_enqueue_style( 'font-awesome-css-css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', null);
    wp_enqueue_style( 'tiny-slider-css', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.7.1/tiny-slider.css', null);
    wp_enqueue_style( 'ffr-lightcase-css', get_template_directory_uri() . '/assets/css/lightcase.css', null, VERSION);
    wp_enqueue_style( 'ffr-lightcase-css', get_template_directory_uri() . '/assets/lightcase/src/css/lightcase.css', null, VERSION);
    wp_enqueue_style( 'ffr-icon', get_template_directory_uri() . '/assets/images/favicon.ico', null, VERSION );
    wp_enqueue_style( 'ffr-jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', null, VERSION );
    wp_enqueue_style( 'fc-styles-css', get_template_directory_uri() . '/assets/css/style.css', null, VERSION );
    wp_enqueue_style( 'ffr-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', null, VERSION );
    wp_enqueue_style( 'ffr-style', get_stylesheet_uri() );
//script//script
    wp_enqueue_script( 'jQuery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array( 'jquery' ), true );
    wp_enqueue_script( 'tiny-js', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.7.1/min/tiny-slider.js', array( 'jquery' ), true );
    wp_enqueue_script( 'jQuery-js', get_template_directory_uri().'/assets/js/vendor/modernizr-3.5.0.min.js', VERSION, true );
    wp_enqueue_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array( 'jquery' ), true );
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array( 'jquery' ), true );
    wp_enqueue_script( 'gc-main-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), VERSION, true );


}

add_action( 'wp_enqueue_scripts', 'ffr_assets' );



  
function nav_menu_add_classes( $items, $args){
    $items[2]->classes[] = 'signup';
    return $items;
}

add_filter('wp_nav_menu_objects','nav_menu_add_classes',10,3);



//SVG support to wordpress
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');




 //Caching issue solution

  if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
