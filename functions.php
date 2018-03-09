<?php
foreach (glob(get_stylesheet_directory() . "/includes/*.php") as $file) {
  require $file;
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0');
  wp_enqueue_script('_bourbon', get_stylesheet_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), '2.0.0', TRUE);
  wp_enqueue_style('_bourbon', get_stylesheet_directory_uri() . '/dist/css/styles.min.css', array(), '2.0.0', 'all');
  wp_enqueue_style('style', get_stylesheet_uri());
}

// add_action('wp_print_styles', 'load_fonts');
// function load_fonts() {
// 	wp_enqueue_style('Lato', '//fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600italic,700italic,800italic,400,800,700,600,300');
// }
