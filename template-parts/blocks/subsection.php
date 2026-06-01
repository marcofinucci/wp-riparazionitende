<?php
defined('ABSPATH') || exit;

$heading = $args['heading'] ?? '';
$text    = $args['text'] ?? '';
$items   = $args['items'] ?? [];
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$heading && !$text && !$items) {
  return;
}
?>

<section class="block-subsection <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl">
      <?php if ($heading) : ?>
        <h2 class="font-heading font-semibold type-xl text-forest mb-6"><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>
      <?php if ($text) : ?>
        <p class="text-muted  mb-5"><?php echo esc_html($text); ?></p>
      <?php endif; ?>
      <?php if ($items) : ?>
        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <?php foreach ($items as $row) : ?>
            <?php $item = is_array($row) ? ($row['item'] ?? '') : $row; ?>
            <?php if (!$item) {
              continue;
            } ?>
            <li class="flex items-start gap-3">
              <span class="w-1.5 h-1.5 rounded-full bg-olive flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-dark type-sm "><?php echo esc_html($item); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>