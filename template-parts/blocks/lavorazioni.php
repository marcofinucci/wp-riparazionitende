<?php
defined('ABSPATH') || exit;

$heading = $args['heading'] ?? 'Lavorazioni principali';
$items   = $args['items'] ?? [];
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$items) {
  return;
}

$heading_id = 'lavorazioni-' . wp_unique_id();
?>

<section class="<?php echo esc_attr(trim($margin_top_class . ' bg-canvas py-14 lg:py-16')); ?>" aria-labelledby="<?php echo esc_attr($heading_id); ?>">
  <div class="container-site">
    <div class="max-w-3xl">
      <?php if ($heading) : ?>
        <h2 id="<?php echo esc_attr($heading_id); ?>" class="section-subheading mb-7"><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>
      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <?php foreach ($items as $row) : ?>
          <?php $item = is_array($row) ? ($row['item'] ?? '') : $row; ?>
          <?php if (!$item) {
            continue;
          } ?>
          <li class="flex items-start gap-3">
            <?php rtc_icon('check', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
            <span class="text-dark text-sm "><?php echo esc_html($item); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>