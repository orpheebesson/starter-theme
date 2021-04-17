<?php

/**
 * Filters link URL of the header logo above login form.
 *
 * @return string
 *
 * @link https://developer.wordpress.org/reference/hooks/login_headerurl/
 */
function login_logo_url()
{
    return home_url();
}

add_filter('login_headerurl', 'login_logo_url');

/**
 * Filters the link text of the header logo above the login form.
 *
 * @return string
 *
 * @link https://developer.wordpress.org/reference/hooks/login_headertext/
 */
function login_logo_url_title()
{
    return get_option('blogname');
}

add_filter('login_headertext', 'login_logo_url_title');

/**
 * Remove menu and submenu pages.
 *
 * @return void
 *
 * @link https://developer.wordpress.org/reference/functions/remove_menu_page/
 * @link https://developer.wordpress.org/reference/functions/remove_submenu_page/
 */
function remove_menus()
{
    remove_menu_page('edit-comments.php');
    
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('options-general.php', 'options-discussion.php');
}

add_action('admin_menu', 'remove_menus');

/**
 * Remove content to the welcome panel on the admin dashboard.
 *
 * @return boolean
 *
 * @link https://developer.wordpress.org/reference/hooks/welcome_panel/
 */
remove_action('welcome_panel', 'wp_welcome_panel');

/**
 * Removes a meta box from one or more screens.
 *
 * @return void
 *
 * @link https://developer.wordpress.org/reference/functions/remove_meta_box/
 */
function remove_dashboard_widgets()
{
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

/**
 * Adds a new dashboard widget.
 *
 * @return void
 *
 * @link https://developer.wordpress.org/reference/functions/wp_add_dashboard_widget/
 */
function add_dashboard_widgets()
{
    wp_add_dashboard_widget('welcome_dashboard_widget', 'Bienvenue', 'welcome_dashboard_widget');
}

add_action('wp_dashboard_setup', 'add_dashboard_widgets');
 

function welcome_dashboard_widget()
{
    echo "Bienvenue sur ce site.";
}