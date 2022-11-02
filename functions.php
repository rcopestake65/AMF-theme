<?php
//load stylesheet
function load_css()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_enqueue_style( 'font-awesome-free', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );
    wp_enqueue_style('cssgg', 'https://unpkg.com/css.gg/icons/all.css');
    wp_enqueue_style('open-props', 'https://unpkg.com/open-props');
}

add_action('wp_enqueue_scripts', 'load_css');

//load js
function loadjs()
{


    wp_register_script('app', get_template_directory_uri() . '/js/app.js', '', 1, true);
    wp_enqueue_script('app');

    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, false );
    wp_enqueue_script('jQuery');
}
add_action('wp_enqueue_scripts', 'loadjs');


//Theme Options

add_theme_support('menus');

//Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main' ),
      'mobile-menu' => __( 'Mobile' ),
      'footer-menu' => __( 'Footer' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

 

/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

//add featured image to posts admin

function theme_support(){
    add_theme_support('post-thumbnails');
    register_sidebar();
  }
  add_action ('after_setup_theme', 'theme_support');
  

//BBPress playground

?>