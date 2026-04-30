<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

if (class_exists('acf')) {
  add_filter('acf/fields/wysiwyg/toolbars', function ($toolbars) {
    $toolbars['Simple'] = array();
    $toolbars['Simple'][1] = array('bold', 'italic', 'formatselect');

    $toolbars['paragraph'] = array();
    $toolbars['paragraph'][1] = array();

    return $toolbars;
  });
}
