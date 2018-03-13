<?php

function myprefix_load_css_and_js() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );

function adv_theme_setup() {
    // Featured Image Support
    add_theme_support('post-thumbnails');

    // Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer'  => __('Footer Menu') 
    ));

    // Post Format Support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'adv_theme_setup');

// widget locations
function init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="block side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name'  => 'Showcase',
        'id'    => 'showcase',
        'before_widget' => '<div class="showcase">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3'
    ));

    register_sidebar(array(
        'name' => 'Box 1',
        'id'   => 'box1',
        'before_widget' => '<div class="box box1">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name'  => 'Box 2',
        'id'    => 'box2',
        'before_widget' => '<div class="box box2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3'
    ));

    register_sidebar(array(
        'name'  => 'Box 3',
        'id'    => 'box3',
        'before_widget' => '<div class="box box3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3'
    ));
}

add_action('widgets_init', 'init_widgets');

function set_excerpt_length() {
    return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');

function get_top_parent() {
    global $post;
    if ($post->post_parent) {
        $ancestor = get_post_ancestors($post->ID);
        return $ancestors[0];
    }

    return $post->ID;
}

function page_is_parent() {
    global $post;

    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}

