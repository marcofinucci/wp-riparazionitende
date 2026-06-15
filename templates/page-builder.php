<?php
/*
Template Name: Page Builder
Template Post Type: page
*/
defined('ABSPATH') || exit;

get_header();
?>

<main id="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php
            $hide_header = (bool) get_field('hide_page_header');
            if (!$hide_header && have_rows('content')) {
                $first_row = get_field('content')[0] ?? null;
                $hide_header = is_array($first_row) && ($first_row['acf_fc_layout'] ?? '') === 'hero';
            }
            ?>

            <?php if (!$hide_header) : ?>
                <?php
                get_template_part('template-parts/page', 'header', [
                    'breadcrumb' => get_field('breadcrumb_label') ?: get_the_title(),
                    'h1'         => get_field('custom_h1') ?: get_the_title(),
                    'subtitle'   => get_field('header_subtitle'),
                ]);
                ?>
            <?php endif; ?>

            <?php if (have_rows('content')) : ?>
                <?php while (have_rows('content')) : the_row(); ?>
                    <?php if (get_row_layout() == 'hero') {
                        get_template_part('template-parts/blocks/hero', null, [
                            'badge'          => get_sub_field('badge'),
                            'heading'        => get_sub_field('heading'),
                            'text'           => get_sub_field('text'),
                            'image'          => get_sub_field('image'),
                            'primary_link'   => get_sub_field('primary_link'),
                            'secondary_link' => get_sub_field('secondary_link'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'stats_bar') {
                        get_template_part('template-parts/blocks/stats-bar', null, [
                            'items' => get_sub_field('items'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'services_grid') {
                        get_template_part('template-parts/blocks/services-grid', null, [
                            'eyebrow'     => get_sub_field('eyebrow'),
                            'heading'     => get_sub_field('heading'),
                            'intro'       => get_sub_field('intro'),
                            'services'    => get_sub_field('services'),
                            'margin_top'  => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'about') {
                        get_template_part('template-parts/blocks/about', null, [
                            'eyebrow'    => get_sub_field('eyebrow'),
                            'heading'    => get_sub_field('heading'),
                            'content'    => get_sub_field('content'),
                            'stats'      => get_sub_field('stats'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'steps_grid') {
                        get_template_part('template-parts/blocks/steps-grid', null, [
                            'eyebrow'      => get_sub_field('eyebrow'),
                            'heading'      => get_sub_field('heading'),
                            'intro'        => get_sub_field('intro'),
                            'steps'        => get_sub_field('steps'),
                            'button_link'  => get_sub_field('button_link'),
                            'button_label' => get_sub_field('button_label'),
                            'margin_top'   => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'coverage_map') {
                        get_template_part('template-parts/blocks/coverage-map', null, [
                            'eyebrow'    => get_sub_field('eyebrow'),
                            'heading'    => get_sub_field('heading'),
                            'content'    => get_sub_field('content'),
                            'quote_text' => get_sub_field('quote_text'),
                            'image'      => get_sub_field('image'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'quote_section') {
                        get_template_part('template-parts/blocks/quote-section', null, [
                            'eyebrow'           => get_sub_field('eyebrow'),
                            'heading'           => get_sub_field('heading'),
                            'highlight'         => get_sub_field('highlight'),
                            'content'           => get_sub_field('content'),
                            'quote'             => get_sub_field('quote'),
                            'author'            => get_sub_field('author'),
                            'background_image'  => get_sub_field('background_image'),
                            'margin_top'        => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'info_box') {
                        get_template_part('template-parts/blocks/info-box', null, [
                            'heading'    => get_sub_field('heading'),
                            'text'       => get_sub_field('text'),
                            'items'      => get_sub_field('items'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'text') {
                        get_template_part('template-parts/blocks/text', null, [
                            'content'    => get_sub_field('content'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'lavorazioni') {
                        get_template_part('template-parts/blocks/lavorazioni', null, [
                            'heading'    => get_sub_field('heading'),
                            'items'      => get_sub_field('items'),
                            'background' => get_sub_field('background'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'subsection') {
                        get_template_part('template-parts/blocks/subsection', null, [
                            'heading'    => get_sub_field('heading'),
                            'text'       => get_sub_field('text'),
                            'items'      => get_sub_field('items'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'note') {
                        get_template_part('template-parts/blocks/note', null, [
                            'title'      => get_sub_field('title'),
                            'text'       => get_sub_field('text'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'salewa') {
                        get_template_part('template-parts/blocks/salewa', null, [
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'steps') {
                        get_template_part('template-parts/blocks/steps', null, [
                            'heading'         => get_sub_field('heading'),
                            'steps'           => get_sub_field('steps'),
                            'download_file'   => get_sub_field('download_file'),
                            'download_label'  => get_sub_field('download_label'),
                            'margin_top'      => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'related_pages') {
                        get_template_part('template-parts/blocks/related-pages', null, [
                            'heading'    => get_sub_field('heading'),
                            'links'      => get_sub_field('links'),
                            'background' => get_sub_field('background'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'contact_canali') {
                        get_template_part('template-parts/blocks/contact-canali', null, [
                            'margin_top'   => get_sub_field('margin_top'),
                            'email_link'   => get_field('contact_email', 'option')   ?: [],
                            'phone_link'   => get_field('contact_phone', 'option')   ?: [],
                            'wa_link'      => get_field('whatsapp_number', 'option') ?: [],
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'contact_form') {
                        get_template_part('template-parts/blocks/contact-form', null, [
                            'margin_top'    => get_sub_field('margin_top'),
                            'heading'       => get_sub_field('heading'),
                            'intro'         => get_sub_field('intro'),
                            'cf7_shortcode' => get_sub_field('cf7_shortcode'),
                            'tips_heading'  => get_sub_field('tips_heading'),
                            'tips'          => get_sub_field('tips') ?: [],
                            'lab_heading'   => get_sub_field('lab_heading'),
                            'lab_text'      => get_sub_field('lab_text'),
                            'lab_link'      => get_sub_field('lab_link') ?: [],
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'faq') {
                        get_template_part('template-parts/blocks/faq', null, [
                            'eyebrow'    => get_sub_field('eyebrow'),
                            'heading'    => get_sub_field('heading'),
                            'items'      => get_sub_field('items'),
                            'background' => get_sub_field('background') ?: (get_sub_field('bg_canvas') ? 'canvas' : 'no'),
                            'margin_top' => get_sub_field('margin_top'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'cta') {
                        get_template_part('template-parts/blocks/cta', null, [
                            'title'          => get_sub_field('title'),
                            'text'           => get_sub_field('text'),
                            'link_primary'   => get_sub_field('link_primary')   ?: [],
                            'link_secondary' => get_sub_field('link_secondary') ?: [],
                            'margin_top'     => get_sub_field('margin_top'),
                        ]);
                    } ?>

                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>