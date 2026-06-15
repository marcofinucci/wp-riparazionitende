<?php
defined('ABSPATH') || exit;

$eyebrow          = $args['eyebrow'] ?? '';
$heading          = $args['heading'] ?? '';
$content          = $args['content'] ?? '';
$quote_text       = $args['quote_text'] ?? '';
$image            = $args['image'] ?? '';
$image_alt        = $args['image_alt'] ?? "Mappa dell'Italia con punti di provenienza delle spedizioni";
$legend_received  = $args['legend_received'] ?? 'Lavorazioni ricevute';
$legend_lab       = $args['legend_lab'] ?? 'Sede laboratorio';
$margin_top       = $args['margin_top'] ?? 'medio';

if (is_array($image)) {
  $image_id = (int) ($image['ID'] ?? 0);
} elseif (is_numeric($image)) {
  $image_id = (int) $image;
} else {
  $image_id = 0;
}
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
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div>
        <?php if ($eyebrow) : ?>
          <p class="text-canvas/70 font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-white mb-6">
            <?php echo nl2br(esc_html($heading)); ?>
          </h2>
        <?php endif; ?>
        <?php if ($content) : ?>
          <div class="space-y-6 mb-8 text-white/65">
            <?php echo wp_kses_post(wpautop($content)); ?>
          </div>
        <?php endif; ?>
        <?php if ($quote_text) : ?>
          <p class="text-canvas/80 type-sm italic"><?php echo esc_html($quote_text); ?></p>
        <?php endif; ?>
      </div>

      <?php if ($image_id) : ?>
        <div class="flex items-center justify-center">
          <div class="relative w-full max-w-xs lg:max-w-sm">
            <?= wp_get_attachment_image($image_id, 'large', false, [
              'class'    => 'w-full h-auto',
              'alt'      => esc_attr($image_alt),
              'loading'  => 'lazy',
              'decoding' => 'async',
            ]) ?>
            <?php if ($legend_received || $legend_lab) : ?>
              <div class="flex items-center justify-center gap-5 mt-4">
                <?php if ($legend_received) : ?>
                  <div class="flex items-center gap-2 text-canvas/70 type-xs font-body">
                    <div class="w-3 h-3 rounded-full bg-canvas/80"></div>
                    <?php echo esc_html($legend_received); ?>
                  </div>
                <?php endif; ?>
                <?php if ($legend_lab) : ?>
                  <div class="flex items-center gap-2 text-canvas/70 type-xs font-body">
                    <div class="w-3 h-3 rounded-full border border-canvas/60 bg-transparent"></div>
                    <?php echo esc_html($legend_lab); ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>