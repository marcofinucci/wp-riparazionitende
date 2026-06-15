<?php
defined('ABSPATH') || exit;

class Rtc_Primary_Nav_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null): void
    {
        if ($depth !== 0) {
            return;
        }

        $output .= '<div id="services-dropdown" class="hidden absolute top-full left-1/2 -translate-x-1/2 pt-3 w-72 z-50">';
        $output .= '<div class="bg-white rounded-2xl shadow-xl border border-canvas p-2">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null): void
    {
        if ($depth !== 0) {
            return;
        }

        $output .= '</div></div>';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0): void
    {
        $title = apply_filters('the_title', $item->title, $item->ID);
        $has_children = in_array('menu-item-has-children', $item->classes, true);

        if ($depth === 0 && $has_children) {
            $output .= '<div class="relative" id="services-parent">';
            $output .= '<button type="button" id="services-btn" aria-haspopup="true" aria-expanded="false"';
            $output .= ' class="text-white hover:text-canvas text-sm font-heading font-medium transition-colors duration-150 flex items-center gap-1 bg-transparent border-0 p-0 cursor-pointer">';
            $output .= esc_html($title);
            ob_start();
            rtc_icon('chevron-down', 'w-4 h-4 transition-transform duration-150', ['id' => 'services-chevron']);
            $output .= ob_get_clean();
            $output .= '</button>';
            return;
        }

        if ($depth === 0) {
            $output .= '<a href="' . esc_url($item->url) . '" class="text-white hover:text-canvas text-sm font-heading font-medium transition-colors duration-150">';
            $output .= esc_html($title);
            $output .= '</a>';
            return;
        }

        $output .= '<a href="' . esc_url($item->url) . '"';
        $output .= ' class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-dark hover:text-forest font-body type-sm font-medium transition-colors group">';
        $output .= esc_html($title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null): void
    {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes, true)) {
            $output .= '</div>';
        }
    }
}

class Rtc_Mobile_Nav_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0): void
    {
        $title = apply_filters('the_title', $item->title, $item->ID);
        $has_children = in_array('menu-item-has-children', $item->classes, true);

        if ($depth === 0 && $has_children) {
            $output .= '<div class="px-4 py-2">';
            $output .= '<p class="text-canvas/60 type-xs font-heading font-semibold uppercase tracking-wider mb-2">';
            $output .= esc_html($title);
            $output .= '</p>';
            return;
        }

        if ($depth === 0) {
            $output .= '<a href="' . esc_url($item->url) . '"';
            $output .= ' class="block px-4 py-3 text-white hover:text-canvas hover:bg-forest-light rounded-xl type-sm font-heading font-medium transition-colors">';
            $output .= esc_html($title);
            $output .= '</a>';
            return;
        }

        $output .= '<a href="' . esc_url($item->url) . '"';
        $output .= ' class="block px-3 py-2 text-white hover:text-canvas hover:bg-forest-light rounded-lg type-sm font-body transition-colors">';
        $output .= esc_html($title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null): void
    {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes, true)) {
            $output .= '</div>';
        }
    }
}

class Rtc_Footer_Nav_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0): void
    {
        $title = apply_filters('the_title', $item->title, $item->ID);
        $link_class = $args->link_class ?? 'text-white hover:text-canvas type-sm transition-colors';

        $output .= '<li>';
        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($link_class) . '">';
        $output .= esc_html($title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null): void
    {
        $output .= '</li>';
    }
}
