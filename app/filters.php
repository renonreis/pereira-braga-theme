<?php

/**
 * Theme filters.
 */

namespace App;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use WP_Block_Type_Registry;

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

/**
 * Add custom class to the footer navigation menu and primary navigation menu CTA
 */
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

/**
 * Add custom category to the block editor.
 *
 * @param array $cats
 * @return array
 */
add_filter('block_categories_all', function ($cats) {
    $new = array(
        'pereira-braga' => array(
            'slug'  => 'pereira-braga-blocks',
            'title' => 'Pereira Braga Blocks',
        )
    );

    $position = 3;
    $cats = array_slice($cats, 0, $position, true) + $new + array_slice($cats, $position, null, true);
    $cats = array_values($cats);

    return $cats;
});


/**
 * Filters the list of allowed block types in the block editor.
 *
 * This function restricts the available block types to Heading, List, Image, and Paragraph only.
 *
 * @param array|bool $allowed_block_types Array of block type slugs, or boolean to enable/disable all.
 * @param object     $block_editor_context The current block editor context.
 *
 * @return array The array of allowed block types.
 */
add_filter('allowed_block_types_all', function ($allowed_block_types, $block_editor_context) {

    // allowed my connect-plug-blocks
    $allowed_namespace = 'acf';
    $registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

    $namespace_blocks = array_filter(array_keys($registered_blocks), function ($block_name) use ($allowed_namespace) {
        // Check if the block's namespace matches the allowed namespace
        return strpos($block_name, $allowed_namespace . '/') === 0;
    });

    $allowed_block_types = array_merge(
        $namespace_blocks,
        array(
            'core/heading',
            'core/image',
            'core/list',
            'core/list-item',
            'core/paragraph',
            'core/quote',
            'core/table',
            'core/embed',
            'core/columns',
            'core/cover',
            'core/ai-assistant',
            'core/ads',
            'core/details',
            'core/grid',
        )
    );

    return $allowed_block_types;
}, 10, 2);
