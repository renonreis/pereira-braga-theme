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

/**
 * Add custom class to every <li> element in wp_nav_menu
 */
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}, 1, 3);

/**
 * Add custom class to every <a> element in wp_nav_menu
 */
add_filter('nav_menu_link_attributes', function ($attrs, $item, $args) {
    if(isset($args->add_a_class)) {
        $attrs['class'] = $args->add_a_class;
    }
    return $attrs;
}, 1, 3);
