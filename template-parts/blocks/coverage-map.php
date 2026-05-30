<?php
defined('ABSPATH') || exit;

$eyebrow     = $args['eyebrow'] ?? '';
$heading     = $args['heading'] ?? '';
$content     = $args['content'] ?? '';
$quote_text  = $args['quote_text'] ?? '';
$margin_top  = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no'      => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$heading && !$content) {
  return;
}

$heading_id = 'coverage-' . wp_unique_id();
?>

<section class="block-coverage-map bg-forest py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="container-site">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div>
        <?php if ($eyebrow) : ?>
          <p class="text-canvas/70 font-heading font-semibold text-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold text-3xl md:text-4xl text-white !leading-tight mb-6">
            <?php echo nl2br(esc_html($heading)); ?>
          </h2>
        <?php endif; ?>
        <?php if ($content) : ?>
          <div class="space-y-6 mb-8 text-white/65">
            <?php echo wp_kses_post(wpautop($content)); ?>
          </div>
        <?php endif; ?>
        <?php if ($quote_text) : ?>
          <p class="text-canvas/80 text-sm italic"><?php echo esc_html($quote_text); ?></p>
        <?php endif; ?>
      </div>

      <div class="flex items-center justify-center">
        <div class="relative w-full max-w-xs lg:max-w-sm" aria-label="Mappa dell'Italia con punti di provenienza delle spedizioni">
          <?php get_template_part('template-parts/blocks/partials/italy-map'); ?>
          <div class="flex items-center justify-center gap-5 mt-4">
            <div class="flex items-center gap-2 text-canvas/70 text-xs font-body">
              <div class="w-3 h-3 rounded-full bg-canvas/80"></div>
              Lavorazioni ricevute
            </div>
            <div class="flex items-center gap-2 text-canvas/70 text-xs font-body">
              <div class="w-3 h-3 rounded-full border border-canvas/60 bg-transparent"></div>
              Sede laboratorio
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>