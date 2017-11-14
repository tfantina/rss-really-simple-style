<?php require("customize-theme.php");

add_action('after_setup_theme', 'theme_slug_setup');


add_theme_support( 'automatic-feed-links' );

function theme_slug_setup() {
  add_theme_support('title-tag');
}

if (! isset($content_width)) {
  $content_width = 800;
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function rss_widgets_init() {
  register_sidebar(( array(
    'name' => __('Main Sidebar', 'theme_slug'),
    'id' => 'sidebar-1',
    'description' => __('Widgets in this area will be shown on all posts and pages'),
  )));
}
add_action('widgets_init', 'rss_widgets_init');


?>
