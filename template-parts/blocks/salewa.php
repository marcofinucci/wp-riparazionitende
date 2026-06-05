<?php
defined('ABSPATH') || exit;

$variant    = $args['variant'] ?? 'default';
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
?>

<section class="block-salewa bg-canvas py-12 lg:py-14 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ($variant === 'centered') : ?>
      <div class="max-w-2xl mx-auto text-center">
        <h2 id="salewa-heading" class="font-heading font-semibold type-xl text-forest mb-3">
          Riparazioni anche su tende a marchio Salewa
        </h2>
        <p class="text-muted mb-6">
          Effettuiamo lavorazioni anche su tende a marchio Salewa.
        </p>
        <a href="https://www.salewa.com" target="_blank" rel="noopener noreferrer"
          class="btn-primary">
          Visita il sito Salewa
          <?php rtc_icon('external-link', 'w-4 h-4'); ?>
        </a>
      </div>
    <?php else : ?>
      <div class="max-w-3xl flex flex-col sm:flex-row items-start sm:items-center gap-5 rounded-2xl p-7 border border-canvas-dark/30">
        <div class="flex-1">
          <h3 id="salewa-heading" class="font-heading font-semibold text-forest type-lg mb-2">Riparazioni anche su tende a marchio Salewa</h3>
          <p class="text-muted type-sm">Effettuiamo lavorazioni anche su tende a marchio Salewa.</p>
        </div>
        <a href="https://www.salewa.com" target="_blank" rel="noopener noreferrer"
          class="btn-primary">
          Visita Salewa
          <?php rtc_icon('external-link', 'w-4 h-4'); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>