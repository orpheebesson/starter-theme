<?php

/**
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support('post-thumbnails');

/**
 * Add custom image size.
 *
 * @return void
 *
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 */
function add_custom_image_size()
{
    // add_image_size('news', 700, 250, true);
}

add_action('after_setup_theme', 'add_custom_image_size');