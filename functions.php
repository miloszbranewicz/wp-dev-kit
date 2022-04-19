<?php
function mario_theme_support()
{
  add_theme_support('title-tag');
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'   => 'Opcje motywu',
    'menu_title'  => 'Opcje motywu',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

function mario_files()
{
  // styles
  wp_enqueue_style('main', get_template_directory_uri() . "/assets/css/main.css", [], filemtime(get_stylesheet_directory() . '/assets/css/main.css'), 'all');

  //  scripts
  wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/main.js'), true);
}

function slick_slider()
{
  wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', [], null, true);
  wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], null, true);
}


add_action('after_setup_theme', 'mario_theme_support');
add_action( 'wp_enqueue_scripts', 'slick_slider');
add_action('wp_enqueue_scripts', 'mario_files');
