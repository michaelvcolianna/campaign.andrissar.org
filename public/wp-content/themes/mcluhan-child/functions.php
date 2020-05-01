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

/**
 * WP Head actions
 *
 * Alters/adds to the elements printed by the wp_head() call in the header.php
 * file.
 */
add_action('wp_head', 'mcluhan_child_wp_head');
function mcluhan_child_wp_head()
{
    global $post;

    if(has_excerpt($post))
    {
        echo '<meta name="description" content="' . get_the_excerpt($post) . '">';
    }
}
