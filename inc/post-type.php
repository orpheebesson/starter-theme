<?php

/**
 * Enable support for Excerpts on posts and pages.
 */
add_post_type_support('page', 'excerpt');

/**
 * Add custom post type.
 *
 * @return object
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 */
function add_custom_post_type()
{
    $labels = array(
        'name'                  => _x('Actualités', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Actualité', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Actualités', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Actualité', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Ajouter', 'textdomain'),
        'add_new_item'          => __('Ajouter', 'textdomain'),
        'new_item'              => __('Nouvelle actualité', 'textdomain'),
        'edit_item'             => __('Éditer l\'actualité', 'textdomain'),
        'view_item'             => __('Voir l\'actualité', 'textdomain'),
        'all_items'             => __('Toutes les actualités', 'textdomain'),
        'search_items'          => __('Rechercher les actualités', 'textdomain'),
        'not_found'             => __('Non trouvée', 'textdomain'),
        'not_found_in_trash'    => __('Non trouvée dans la corbeille', 'textdomain'),
    );
 
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-format-aside',
        'show_in_rest'          => true,
        'rewrite'			    => false,
        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'tags'),
    );
 
    register_post_type('custom', $args);
}
 
add_action('init', 'add_custom_post_type');