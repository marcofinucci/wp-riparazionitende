<?php

/**
 * Riparazioni Tende Campeggio - Theme Functions
 */

defined('ABSPATH') || exit;

require_once get_template_directory() . '/inc/icons.php';
require_once get_template_directory() . '/inc/nav-walker.php';

// Theme setup
function rtc_theme_setup(): void
{
    load_theme_textdomain('riparazionetende', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('woocommerce'); // future-proof
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary'         => __('Menu principale', 'riparazionetende'),
        'footer_services' => __('Footer — Servizi', 'riparazionetende'),
        'footer_info'     => __('Footer — Informazioni', 'riparazionetende'),
        'footer_legal'    => __('Footer — Link legali', 'riparazionetende'),
    ]);

    // Add custom image
    add_image_size('hey-1920', 1920, 1920);
    add_image_size('hey-1920x1080', 1920, 1080, true);
}
add_action('after_setup_theme', 'rtc_theme_setup');

// Enqueue scripts and styles
function rtc_enqueue_assets(): void
{
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();
    $version   = wp_get_theme()->get('Version');

    // Google Fonts
    wp_enqueue_style(
        'rtc-google-fonts',
        'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    // Compiled Tailwind CSS (production)
    $compiled_css = $theme_dir . '/assets/css/app.css';
    if (file_exists($compiled_css)) {
        wp_enqueue_style('rtc-app', $theme_uri . '/assets/css/app.css', ['rtc-google-fonts'], $version);
    }

    // Theme JS
    wp_enqueue_script('rtc-app', $theme_uri . '/assets/js/app.js', [], $version, true);
}
add_action('wp_enqueue_scripts', 'rtc_enqueue_assets');

// Remove WordPress default styles
function rtc_remove_default_styles(): void
{
    wp_deregister_style('wp-block-library');
    wp_deregister_style('wp-block-library-theme');
    wp_deregister_style('classic-themes');
}
add_action('wp_enqueue_scripts', 'rtc_remove_default_styles', 100);

// Disable wp admin bar
add_filter('show_admin_bar', '__return_false');

/* Excerpt more */
function rtc_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'rtc_excerpt_more');

/* Excerpt length */
function rtc_excerpt_length($length)
{
    return 16;
}
add_filter('excerpt_length', 'rtc_excerpt_length');

/* ACF options page */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Impostazioni Sito',
        'menu_title' => 'Impostazioni Sito',
        'menu_slug'  => 'rtc-settings',
        'capability' => 'manage_options',
        'redirect'   => false,
    ]);
}

/* Pagination */

function show_pagination()
{
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}

/* Disable WP Admin Bar */

add_filter('show_admin_bar', '__return_false');

/* Move Yoast to bottom */
function hey_yoasttobottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'hey_yoasttobottom');

/* Contact form 7 delete p tags */
add_filter('wpcf7_autop_or_not', '__return_false');

/* Disable plugin auto update */
add_filter('auto_update_plugin', '__return_false');

/* Disable theme auto update */
add_filter('auto_update_theme', '__return_false');
