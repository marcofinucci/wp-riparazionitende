<?php
defined('ABSPATH') || exit;

$images       = $args['images'] ?? [];
$grid_columns = (string) ($args['grid_columns'] ?? '2');
$margin_top   = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no'      => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

$grid_classes = [
  '1' => 'grid-cols-1',
  '2' => 'grid-cols-1 sm:grid-cols-2',
  '3' => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-3',
  '4' => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
];
$grid_class = $grid_classes[$grid_columns] ?? $grid_classes['2'];
$is_single  = $grid_columns === '1';

$image_ids = [];
foreach ((array) $images as $image) {
  if (is_array($image)) {
    $image_id = (int) ($image['ID'] ?? 0);
  } elseif (is_numeric($image)) {
    $image_id = (int) $image;
  } else {
    $image_id = 0;
  }

  if ($image_id) {
    $image_ids[] = $image_id;
  }
}

if (!$image_ids) {
  return;
}
?>

<section class="block-images <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal grid <?php echo esc_attr($grid_class); ?> gap-2 lg:gap-4">
      <?php foreach ($image_ids as $i => $image_id) : ?>
        <div class="overflow-hidden rounded-2xl <?php echo $is_single ? '' : 'aspect-[4/3]'; ?>" style="--reveal-delay:<?php echo esc_attr($i * 80); ?>ms">
          <?= wp_get_attachment_image($image_id, 'large', false, [
            'class'    => $is_single ? 'w-full h-auto' : 'w-full h-full object-cover',
            'loading'  => 'lazy',
            'decoding' => 'async',
          ]) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>