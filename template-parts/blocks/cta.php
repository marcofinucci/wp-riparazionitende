<?php
defined('ABSPATH') || exit;

$title          = $args['title']         ?? '';
$text           = $args['text']          ?? '';
$link_primary   = $args['link_primary']  ?? [];
$link_secondary = $args['link_secondary'] ?? [];
$margin_top     = $args['margin_top']    ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
$heading_id = 'cta-' . wp_unique_id();
?>

<section class="block-cta bg-forest-dark py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <?php if ($title) : ?>
      <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-2xl text-white mb-4"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <?php if ($text) : ?>
      <p class="text-white/65 max-w-lg mx-auto"><?php echo esc_html($text); ?></p>
    <?php endif; ?>
    <?php if (!empty($link_primary['url']) || !empty($link_secondary['url'])) : ?>
      <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
        <?php if (!empty($link_primary['url'])) : ?>
          <a href="<?php echo esc_url($link_primary['url']); ?>"
            <?php if (!empty($link_primary['target'])) : ?>target="<?php echo esc_attr($link_primary['target']); ?>" rel="noopener noreferrer" <?php endif; ?>
            class="btn-white">
            <?php echo esc_html($link_primary['title']); ?>
          </a>
        <?php endif; ?>
        <?php if (!empty($link_secondary['url'])) : ?>
          <a href="<?php echo esc_url($link_secondary['url']); ?>"
            <?php if (!empty($link_secondary['target'])) : ?>target="<?php echo esc_attr($link_secondary['target']); ?>" rel="noopener noreferrer" <?php endif; ?>
            class="btn-outline-white">
            <?php echo esc_html($link_secondary['title']); ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>