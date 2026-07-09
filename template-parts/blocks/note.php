<?php
defined('ABSPATH') || exit;

$title = $args['title'] ?? '';
$text = $args['text'] ?? '';
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$text) {
  return;
}
?>

<section class="block-note <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal max-w-3xl bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4">
      <?php rtc_icon('info', 'w-5 h-5 text-forest flex-shrink-0 mt-0.5'); ?>
      <div class="flow">
        <?php if ($title) : ?>
          <h3 class="font-heading font-semibold text-forest type-base rich-text"><?php echo wp_kses_post($title); ?></h3>
        <?php endif; ?>
        <p class="text-muted type-sm mt-4 rich-text"><?php echo wp_kses_post($text); ?></p>
      </div>
    </div>
  </div>
</section>