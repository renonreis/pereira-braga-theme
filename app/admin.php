<?php

/**
 * Admin setup.
 */

namespace App;

add_action('admin_menu', function () {
    /**
     * Disable posts and use only pages in WordPress.
     * @link https://developer.wordpress.org/reference/functions/remove_menu_page/
     */
    remove_menu_page('edit.php');
});

