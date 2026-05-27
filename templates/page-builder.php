<?php
/*
Template Name: Page
Template Post Type: page
*/

/* Categories */
$categories = array(
    'taxonomy' => 'product_cat',
    'parent' => 0,
);
?>

<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php
            if (get_field('options')['maintitletype'] == 'hero') {
                get_template_part('template-parts/main-title-hero', null, [
                    'image' => get_field('options')['maintitlehero']['image'],
                    'title' => get_field('options')['maintitlehero']['title'],
                    'bottom_title' => get_field('options')['maintitlehero']['bottomtitle'],
                ]);
            } else if (get_field('options')['maintitletype'] == 'default') {
                echo '<div class="container"><h1 class="mt-medium mb-0 text-xl-center">' . get_the_title() . '</h1></div>';
            }
            ?>

            <?php if (have_rows('content')) : ?>
                <?php while (have_rows('content')) : the_row(); ?>

                    <?php if (get_row_layout() == 'title') {
                        get_template_part('template-parts/blocks/title', null, [
                            'top_title' => get_sub_field('toptitle'),
                            'title' => get_sub_field('title'),
                            'bottom_title' => get_sub_field('bottomtitle'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                            'header' => get_sub_field('header'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'editor') {
                        get_template_part('template-parts/blocks/editor', null, [
                            'editor' => get_sub_field('editor'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                            'block_align' => get_sub_field('blockalign'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'content_1') {
                        get_template_part('template-parts/blocks/content-1', null, [
                            'title' => get_sub_field('title'),
                            'text' => get_sub_field('text'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'content_2') {
                        get_template_part('template-parts/blocks/content-2', null, [
                            'title' => get_sub_field('title'),
                            'text' => get_sub_field('text'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'contacts') {
                        get_template_part('template-parts/blocks/contacts', null, [
                            'title' => get_sub_field('title'),
                            'text' => get_sub_field('text'),
                            'form' => get_sub_field('form'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'map') {
                        get_template_part('template-parts/blocks/map', null, [
                            'text' => get_sub_field('text'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'twoimage') {
                        get_template_part('template-parts/blocks/two-image', null, [
                            'block_margin_top' => get_sub_field('blockmargintop'),
                            'image_1' => get_sub_field('image1'),
                            'image_2' => get_sub_field('image2'),
                            'link_1' => get_sub_field('link_1'),
                            'link_2' => get_sub_field('link_2'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'image') {
                        get_template_part('template-parts/blocks/image', null, [
                            'image' => get_sub_field('image'),
                            'block_align' => get_sub_field('blockalign'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                            'block_width' => get_sub_field('blockwidth'),
                            'image_ratio' => get_sub_field('imageratio'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'imagetext') {
                        get_template_part('template-parts/blocks/image-text', null, [
                            'image' => get_sub_field('image'),
                            'image_position' => get_sub_field('imageposition'),
                            'vertical_align' => get_sub_field('verticalalign'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                            'image_ratio' => get_sub_field('imageratio'),
                            'top_title' => get_sub_field('toptitle'),
                            'title' => get_sub_field('title'),
                            'bottom_title' => get_sub_field('bottomtitle'),
                            'link' => get_sub_field('link'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'cards') {
                        get_template_part('template-parts/blocks/cards', null, [
                            'cards' => get_sub_field('cards'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                        ]);
                    } ?>

                    <?php if (get_row_layout() == 'list') {
                        get_template_part('template-parts/blocks/list', null, [
                            'top_title' => get_sub_field('toptitle'),
                            'title' => get_sub_field('title'),
                            'link' => get_sub_field('link'),
                            'list' => get_sub_field('list'),
                            'block_margin_top' => get_sub_field('blockmargintop'),
                        ]);
                    } ?>
                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>