<?php

/**
 * Riparazioni Tende Campeggio - Theme Functions
 */

defined('ABSPATH') || exit;

require_once get_template_directory() . '/inc/icons.php';

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
        'primary'    => __('Menu principale', 'riparazionetende'),
        'footer_nav' => __('Menu footer', 'riparazionetende'),
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
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap',
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

// ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Impostazioni Sito',
        'menu_title' => 'Impostazioni Sito',
        'menu_slug'  => 'rtc-settings',
        'capability' => 'manage_options',
        'redirect'   => false,
    ]);
}



// Helper: contact email
function rtc_contact_email(): string
{
    $email = 'info@riparazionitendecampeggio.it';
    if (function_exists('get_field')) {
        $acf = get_field('contact_email', 'option');
        if ($acf) {
            $email = $acf;
        }
    }
    return sanitize_email($email);
}

// Helper: contact phone (display format)
function rtc_contact_phone(): string
{
    $phone = '+39 085 000 0000';
    if (function_exists('get_field')) {
        $acf = get_field('contact_phone', 'option');
        if ($acf) {
            $phone = $acf;
        }
    }
    return sanitize_text_field($phone);
}

// Helper: WhatsApp link
function rtc_whatsapp_link(string $message = ''): string
{
    $number = get_option('rtc_whatsapp', '393000000000');
    if (function_exists('get_field')) {
        $number = get_field('whatsapp_number', 'option') ?: $number;
    }
    $number = preg_replace('/[^0-9]/', '', $number) ?: '393000000000';
    $url    = 'https://wa.me/' . $number;
    if ($message) {
        $url .= '?text=' . rawurlencode($message);
    }
    return esc_url($url);
}

// Contact form handler
function rtc_handle_contact_form(): void
{
    $redirect = home_url('/contatti/');

    if (
        !isset($_POST['rtc_contact_nonce'])
        || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['rtc_contact_nonce'])), 'rtc_contact_form')
    ) {
        wp_safe_redirect(add_query_arg('contact', 'error', $redirect));
        exit;
    }

    $name    = isset($_POST['contact_name']) ? sanitize_text_field(wp_unslash($_POST['contact_name'])) : '';
    $from    = isset($_POST['contact_email']) ? sanitize_email(wp_unslash($_POST['contact_email'])) : '';
    $phone   = isset($_POST['contact_phone']) ? sanitize_text_field(wp_unslash($_POST['contact_phone'])) : '';
    $subject = isset($_POST['contact_subject']) ? sanitize_text_field(wp_unslash($_POST['contact_subject'])) : '';
    $body    = isset($_POST['contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['contact_message'])) : '';

    if (!$name || !$from || !$subject || !$body || !is_email($from)) {
        wp_safe_redirect(add_query_arg('contact', 'error', $redirect));
        exit;
    }

    $to      = rtc_contact_email();
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $from . '>',
    ];

    $message = "Nuovo messaggio dal sito\n\n";
    $message .= "Nome: {$name}\n";
    $message .= "Email: {$from}\n";
    if ($phone) {
        $message .= "Telefono: {$phone}\n";
    }
    $message .= "Oggetto: {$subject}\n\n";
    $message .= $body;

    $sent = wp_mail($to, '[Contatti sito] ' . $subject, $message, $headers);

    wp_safe_redirect(add_query_arg('contact', $sent ? 'success' : 'error', $redirect));
    exit;
}
add_action('admin_post_rtc_contact', 'rtc_handle_contact_form');
add_action('admin_post_nopriv_rtc_contact', 'rtc_handle_contact_form');

// Helper: format phone for tel: link
function rtc_phone_link(string $phone): string
{
    return 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
}
