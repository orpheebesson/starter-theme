<?php

/**
 * Register and Enqueue Assets.
 *
 * @return void
 */
function register_assets()
{
    /**
     * Enqueue a script.
     *
     * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     */
    wp_enqueue_script(
        'starter_theme_js',
        get_template_directory_uri() . '/assets/js/index.js',
        array(),
        '1.0',
        true
    );

    /**
     * Enqueue a CSS stylesheet.
     *
     * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     */
    wp_enqueue_style(
        'starter_theme_css',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'register_assets');