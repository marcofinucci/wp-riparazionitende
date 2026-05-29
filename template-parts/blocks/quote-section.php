<?php
defined('ABSPATH') || exit;

$eyebrow   = $args['eyebrow'] ?? '';
$heading   = $args['heading'] ?? '';
$highlight = $args['highlight'] ?? '';
$content   = $args['content'] ?? '';
$quote     = $args['quote'] ?? '';
$author    = $args['author'] ?? '';
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
    'no'      => '',
    'piccolo' => 'mt-6 lg:mt-8',
    'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$heading && !$content && !$quote) {
    return;
}

$heading_id = 'quote-' . wp_unique_id();
?>

<section class="block-quote-section <?php echo esc_attr($margin_top_class); ?>" aria-labelledby="<?php echo esc_attr($heading_id); ?>">
  <div class="container-site">
    <div class="max-w-3xl mx-auto text-center">
      <?php if ($eyebrow) : ?>
        <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
      <?php endif; ?>
      <?php if ($heading) : ?>
        <h2 id="<?php echo esc_attr($heading_id); ?>" class="section-heading mb-4"><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>
      <?php if ($highlight) : ?>
        <p class="font-heading font-semibold text-olive text-xl mb-8"><?php echo esc_html($highlight); ?></p>
      <?php endif; ?>
      <?php if ($content) : ?>
        <div class="space-y-4 text-muted mb-12 text-left max-w-2xl mx-auto">
          <?php echo wp_kses_post(wpautop($content)); ?>
        </div>
      <?php endif; ?>
      <?php if ($quote) : ?>
        <figure class="bg-forest rounded-2xl p-8 text-left max-w-2xl mx-auto">
          <?php rtc_icon('quote', 'w-8 h-8 text-canvas/50 mb-4'); ?>
          <blockquote class="font-heading text-xl text-white mb-5">
            <?php echo esc_html($quote); ?>
          </blockquote>
          <?php if ($author) : ?>
            <figcaption class="text-canvas/65 text-sm font-body">
              — <?php echo esc_html($author); ?>
            </figcaption>
          <?php endif; ?>
        </figure>
      <?php endif; ?>
    </div>
  </div>
</section>
