<?php
// Enable description for menu items
function description_walker($walker, $menu_id)
{
    return 'Walker_Nav_Menu_Edit_Custom';
}
add_filter('wp_edit_nav_menu_walker', 'description_walker', 10, 2);

class Walker_Nav_Menu_Edit_Custom extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->walker) && is_a($args->walker, 'Walker_Nav_Menu_Edit_Custom')) {
            $output .= '<div class="sub-menu-description">';
        } else {
            $output .= '<ul>';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->walker) && is_a($args->walker, 'Walker_Nav_Menu_Edit_Custom')) {
            $output .= '</div>';
        } else {
            $output .= '</ul>';
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li id="menu-item-' . $item->ID . '" ' . $class_names . '>';
        $output .= $indent . '<div class="menu-item-description">' . esc_html($item->description) . '</div>';
        $output .= $indent;

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID);
        $item_output .= $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
