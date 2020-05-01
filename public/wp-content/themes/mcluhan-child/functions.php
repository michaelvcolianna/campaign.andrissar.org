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
    $id = get_queried_object_id();

    if(has_excerpt($id))
    {
        echo '<meta name="description" content="' . get_the_excerpt($id) . '">';
    }
}

/**
 * Media page comments
 *
 * Disables comments on media pages globally.
 *
 * @link https://www.wpbeginner.com/wp-tutorials/how-to-completely-disable-comments-in-wordpress/#disable-comments-on-media
 */
add_filter('comments_open', 'mcluhan_child_comments_open', 10, 2);
function mcluhan_child_comments_open($open, $post_id)
{
    $post = get_post($post_id);

    if($post->post_type == 'attachment')
    {
        return false;
    }

    return $open;
}
