<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

  function clara_excerpt_length($length) {
    return 50;
  }
  add_filter('excerpt_length', 'clara_excerpt_length', 999);

  function register_theme_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('Header Menu')
      )
    );
  }

  add_action('init', 'register_theme_menus');

function clara_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

clara_create_widget( 'Footer widget area', 'footer-widget', 'Footer widget area' );
clara_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
clara_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


  function clara_theme_styles() {

    wp_enqueue_style( 'bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css' );
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'amiri_font', 'https://fonts.googleapis.com/css?family=Amiri|Open+Sans' );
    wp_enqueue_style('bulma_css', get_template_directory_uri() . '/css/bulma.css');
    wp_enqueue_style('slick_css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick-theme_css', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
  }

  add_action('wp_enqueue_scripts', 'clara_theme_styles');

  function clara_theme_js() {
    wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', false );
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
  }

  add_action('wp_enqueue_scripts', 'clara_theme_js');

function exclude_category( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
  $query->set( 'cat', '-22,-24' );
  }
}
add_action( 'pre_get_posts', 'exclude_category' );

?>
