<?php

function myprefix_load_css_and_js() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );

function simple_theme_setup() {
    // Featured Image Support
    add_theme_support('post-thumbnails');

    // Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length() {
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

// widget locations
function init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'init_widgets');
