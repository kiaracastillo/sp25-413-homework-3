<?php

function kc_child_css() {

    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parent-style')
    );

}

add_action('wp_enqueue_scripts', 'kc_child_css');


function kc_child_excerpt($length) {
    return 20;
}

add_filter('excerpt_length', 'kc_child_excerpt');

?>