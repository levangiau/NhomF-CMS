<?php 
function chendl(){
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css','all' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/font-awesome.min.css','all' );
  wp_enqueue_style( 'swipercss', get_stylesheet_directory_uri()  . '/css/swiper.min.css','all' );
  wp_enqueue_style( 'main_css1', get_stylesheet_directory_uri()  . '/css/1.css','all' );
  wp_enqueue_style( 'main_css2', get_stylesheet_directory_uri()  . '/css/2.css','all' );
  wp_enqueue_style( 'main_css3', get_stylesheet_directory_uri()  . '/css/3.css','all' );
  wp_enqueue_style( 'main_css4', get_stylesheet_directory_uri()  . '/css/4.css','all' );
  wp_enqueue_style( 'main_css5', get_stylesheet_directory_uri()  . '/css/5.css','all' );
  wp_enqueue_style( 'main_css6', get_stylesheet_directory_uri()  . '/css/6.css','all' );
  wp_enqueue_style( 'main_css7', get_stylesheet_directory_uri()  . '/css/7.css','all' );
  wp_enqueue_style( 'main_css8', get_stylesheet_directory_uri()  . '/css/8.css','all' );
  wp_enqueue_style( 'main_css9', get_stylesheet_directory_uri()  . '/css/9.css','all' );
  wp_enqueue_style( 'main_css10', get_stylesheet_directory_uri()  . '/css/10.css','all' );


}
add_action('wp_enqueue_scripts', 'chendl');

function chenjs(){
	wp_enqueue_script( 'jj_js', get_template_directory_uri() . '/js/jquery-2.1.4.min.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/js/swiper.min.js');
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/1.js');
	wp_enqueue_script( 'my_custom_js5', get_template_directory_uri() . '/js/5.js');
}
add_action('wp_enqueue_scripts', 'chenjs');
//add menu 
add_theme_support( 'menus' );
register_nav_menus(
        array(
                'main-nav' => 'Menu chính'
        )
);



?>

