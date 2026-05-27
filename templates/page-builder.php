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
            get_template_part('template-parts/page', 'header', [
                'breadcrumb' => get_field('breadcrumb_label') ?: get_the_title(),
                'h1'         => get_field('custom_h1') ?: get_the_title(),
                'subtitle'   => get_field('header_subtitle') ?: '',
            ]);
            ?>

            <?php if (have_rows('content')) : ?>
                <?php while (have_rows('content')) : the_row(); ?>

                    <?php if (get_row_layout() == 'text') {
                        get_template_part('template-parts/blocks/text', null, [
                            'content' => get_sub_field('content'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'lavorazioni') {
                        get_template_part('template-parts/blocks/lavorazioni', null, [
                            'heading' => get_sub_field('heading'),
                            'items'   => get_sub_field('items'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'subsection') {
                        get_template_part('template-parts/blocks/subsection', null, [
                            'heading' => get_sub_field('heading'),
                            'text'    => get_sub_field('text'),
                            'items'   => get_sub_field('items'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'note') {
                        get_template_part('template-parts/blocks/note', null, [
                            'text' => get_sub_field('text'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'salewa') {
                        get_template_part('template-parts/blocks/salewa');
                    } ?>

                    <?php if (get_row_layout() == 'steps') {
                        get_template_part('template-parts/blocks/steps', null, [
                            'heading' => get_sub_field('heading'),
                            'steps'   => get_sub_field('steps'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'related_pages') {
                        get_template_part('template-parts/blocks/related-pages', null, [
                            'heading' => get_sub_field('heading'),
                            'links'   => get_sub_field('links'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'contact_canali') {
                        get_template_part('template-parts/blocks/contact-canali');
                    } ?>

                    <?php if (get_row_layout() == 'contact_form') {
                        get_template_part('template-parts/blocks/contact-form');
                    } ?>

                    <?php if (get_row_layout() == 'faq') {
                        get_template_part('template-parts/blocks/faq', null, [
                            'heading' => get_sub_field('heading'),
                            'items'   => get_sub_field('items'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'cta') {
                        get_template_part('template-parts/blocks/cta', null, [
                            'title'           => get_sub_field('title'),
                            'text'            => get_sub_field('text'),
                            'show_whatsapp'   => get_sub_field('show_whatsapp'),
                            'show_spedire'    => get_sub_field('show_spedire'),
                            'whatsapp_label'  => get_sub_field('whatsapp_label'),
                        ]);
                    } ?>

                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>