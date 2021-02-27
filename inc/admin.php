<?php

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