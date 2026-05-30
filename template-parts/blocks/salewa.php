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
  <div class="container-site">
    <?php if ($variant === 'centered') : ?>
      <div class="max-w-2xl mx-auto text-center">
        <h2 id="salewa-heading" class="section-subheading mb-3">
          Riparazioni anche su tende a marchio Salewa
        </h2>
        <p class="text-muted mb-6">
          Effettuiamo lavorazioni anche su tende a marchio Salewa.
        </p>
        <a href="https://www.salewa.com" target="_blank" rel="noopener noreferrer"
          class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-semibold text-sm transition-colors border border-forest/25 hover:border-olive/35 px-5 py-2.5 rounded-full">
          Visita il sito Salewa
          <?php rtc_icon('external-link', 'w-4 h-4'); ?>
        </a>
      </div>
    <?php else : ?>
      <div class="max-w-3xl flex flex-col sm:flex-row items-start sm:items-center gap-5 rounded-2xl p-7 border border-canvas-dark/30">
        <div class="flex-1">
          <h3 id="salewa-heading" class="font-heading font-semibold text-forest text-lg mb-2">Riparazioni anche su tende a marchio Salewa</h3>
          <p class="text-muted text-sm">Effettuiamo lavorazioni anche su tende a marchio Salewa.</p>
        </div>
        <a href="https://www.salewa.com" target="_blank" rel="noopener noreferrer"
          class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-semibold text-sm transition-colors border border-forest/25 hover:border-olive/35 px-4 py-2.5 rounded-full flex-shrink-0">
          Visita Salewa
          <?php rtc_icon('external-link', 'w-4 h-4'); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>