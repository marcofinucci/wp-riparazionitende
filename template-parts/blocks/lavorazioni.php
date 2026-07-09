<?php
defined('ABSPATH') || exit;

$heading    = $args['heading'] ?? 'Lavorazioni principali';
$items      = $args['items'] ?? [];
$background = $args['background'] ?? 'no';
$margin_top = $args['margin_top'] ?? 'medio';
$bg_classes = [
  'canvas' => 'bg-canvas',
  'forest' => 'bg-forest',
];
$bg_class   = $bg_classes[$background] ?? '';
$has_bg     = $background !== 'no' && $background !== '';
$is_forest  = $background === 'forest';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
$section_class = trim('block-lavorazioni ' . ($has_bg ? $bg_class . ' py-14 lg:py-16 ' : '') . $margin_top_class);

if (!$items) {
  return;
}

$heading_id = 'lavorazioni-' . wp_unique_id();
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal max-w-3xl">
      <?php if ($heading) : ?>
        <h2 id="<?php echo esc_attr($heading_id); ?>" class="<?php echo $is_forest ? 'font-heading font-semibold type-2xl text-white' : 'font-heading font-semibold type-xl text-forest'; ?> mb-7 rich-text"><?php echo wp_kses_post($heading); ?></h2>
      <?php endif; ?>
      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <?php foreach ($items as $row) : ?>
          <?php $item = is_array($row) ? ($row['item'] ?? '') : $row; ?>
          <?php if (!$item) {
            continue;
          } ?>
          <li class="flex items-start gap-3">
            <?php rtc_icon('check', 'w-5 h-5 flex-shrink-0 mt-0.5 ' . ($is_forest ? 'text-canvas' : 'text-olive')); ?>
            <span class="<?php echo $is_forest ? 'text-white/80' : 'text-dark'; ?> type-sm"><?php echo esc_html($item); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>