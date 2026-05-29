<?php
defined('ABSPATH') || exit;

$items = $args['items'] ?? [];

if (!$items) {
    return;
}
?>

<section class="block-stats-bar bg-olive" aria-label="Numeri chiave">
  <div class="container-site py-8 lg:py-10">
    <div class="grid grid-cols-1 sm:grid-cols-3 divide-y sm:divide-y-0 sm:divide-x divide-white/20">
      <?php foreach ($items as $row) : ?>
        <?php
        $value = is_array($row) ? ($row['value'] ?? '') : '';
        $label = is_array($row) ? ($row['label'] ?? '') : '';
        if (!$value && !$label) {
            continue;
        }
        ?>
        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <?php if ($value) : ?>
            <span class="font-heading font-bold text-3xl text-white"><?php echo esc_html($value); ?></span>
          <?php endif; ?>
          <?php if ($label) : ?>
            <span class="text-white mt-1 font-body"><?php echo esc_html($label); ?></span>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
