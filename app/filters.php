<?php

/**
 * Theme filters.
 */

namespace App;

use Illuminate\Support\Facades\View;

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

add_filter( 'wp_nav_menu_items', function ($items, $args) {
    if($args->theme_location === 'footer_navigation') {
        $items .= '<li class="text-[#293E59]! font-light! text-[16px]! leading-[30px] hover:underline!"><a class="block no-underline!" href="#" target="_blank">Fale conosco</a></li>';
    }

    if ($args->theme_location === 'primary_navigation') {
        $items .= View::make('partials.nav-menu-primary-cta', [
            'href' => '#',
        ])->render();
    }
    return $items;
}, 10, 2);

