<?php
defined('ABSPATH') || exit;

$content = $args['content'] ?? '';
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$content) {
  return;
}
?>

<section class="block-text <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal max-w-3xl text-muted type-lg [&>*]:mt-4 [&>*:first-child]:mt-0 [&>:last-child]:mb-0">
      <?php echo wp_kses_post($content); ?>
    </div>
  </div>
</section>