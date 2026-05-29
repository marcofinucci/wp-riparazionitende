<?php
defined('ABSPATH') || exit;

$heading    = $args['heading'] ?? '';
$text       = $args['text'] ?? '';
$items      = $args['items'] ?? [];
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
    'no'      => '',
    'piccolo' => 'mt-6 lg:mt-8',
    'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$heading && !$items) {
    return;
}

$heading_id = 'info-box-' . wp_unique_id();
?>

<section class="block-info-box py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>" aria-labelledby="<?php echo esc_attr($heading_id); ?>">
  <div class="container-site">
    <div class="bg-forest/5 border border-forest/15 rounded-2xl p-8 lg:p-12 max-w-4xl mx-auto">
      <div class="flex flex-col lg:flex-row gap-8">
        <div class="w-14 h-14 rounded-xl bg-forest/10 flex items-center justify-center flex-shrink-0">
          <?php rtc_icon('info', 'w-7 h-7 text-forest'); ?>
        </div>
        <div>
          <?php if ($heading) : ?>
            <h2 id="<?php echo esc_attr($heading_id); ?>" class="section-subheading mb-4"><?php echo esc_html($heading); ?></h2>
          <?php endif; ?>
          <?php if ($text) : ?>
            <p class="text-muted mb-5"><?php echo esc_html($text); ?></p>
          <?php endif; ?>
          <?php if ($items) : ?>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2">
              <?php foreach ($items as $row) : ?>
                <?php $item = is_array($row) ? ($row['item'] ?? '') : $row; ?>
                <?php if (!$item) {
                    continue;
                } ?>
                <li class="flex items-start gap-2.5 text-sm text-dark">
                  <?php rtc_icon('check', 'w-4 h-4 text-olive flex-shrink-0 mt-0.5'); ?>
                  <?php echo esc_html($item); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
