<?php

/**
 * Enqueues
 *
 * Loads styles and scripts in.
 */
add_action( 'wp_enqueue_scripts', 'mcluhan_child_enqueue_styles' );
function mcluhan_child_enqueue_styles()
{
    // Custom styles from this child theme
    wp_enqueue_style(
        'mcluhan-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['mcluhan-style'],
        wp_get_theme()->get('Version')
    );
}
