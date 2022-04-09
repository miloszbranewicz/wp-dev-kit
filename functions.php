<?php
function mario_theme_support() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'mario_theme_support' );

function mario_files()
{
    // styles
    wp_enqueue_style('main', get_template_directory_uri() . "/assets/css/main.css", [], filemtime(get_stylesheet_directory() . '/assets/css/main.css'), 'all');

    //  scripts
    wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", [], filemtime(get_stylesheet_directory() . '/assets/js/main.js'), true);
}

add_action('wp_enqueue_scripts', 'mario_files');
