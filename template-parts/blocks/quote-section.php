<?php
defined('ABSPATH') || exit;

$eyebrow           = $args['eyebrow'] ?? '';
$heading           = $args['heading'] ?? '';
$highlight         = $args['highlight'] ?? '';
$content           = $args['content'] ?? '';
$quote             = $args['quote'] ?? '';
$author            = $args['author'] ?? '';
$background_image  = $args['background_image'] ?? '';
$margin_top        = $args['margin_top'] ?? 'medio';

if (is_array($background_image)) {
  $bg_image_id = (int) ($background_image['ID'] ?? 0);
} elseif (is_numeric($background_image)) {
  $bg_image_id = (int) $background_image;
} else {
  $bg_image_id = 0;
}

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
$has_main   = $eyebrow || $heading || $highlight || $content;
$section_class = trim(implode(' ', [
  'block-quote-section',
  'relative',
  'overflow-hidden',
  'py-14',
  'lg:py-16',
  $margin_top_class,
  $bg_image_id ? '' : 'bg-canvas',
]));
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <?php if ($bg_image_id) : ?>
    <?= wp_get_attachment_image($bg_image_id, 'hey-1920x1080', false, [
      'class'       => 'absolute inset-0 w-full h-full object-cover',
      'alt'         => '',
      'aria-hidden' => 'true',
      'loading'     => 'lazy',
      'decoding'    => 'async',
    ]) ?>
  <?php endif; ?>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="bg-cream rounded-2xl p-8 lg:p-10 xl:p-12 shadow-lg">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 lg:items-center">
        <?php if ($has_main) : ?>
          <div class="text-left">
            <?php if ($eyebrow) : ?>
              <p class="text-olive font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
            <?php endif; ?>
            <?php if ($heading) : ?>
              <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest mb-4"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <?php if ($highlight) : ?>
              <p class="font-heading font-semibold text-olive type-xl mb-6"><?php echo esc_html($highlight); ?></p>
            <?php endif; ?>
            <?php if ($content) : ?>
              <div class="space-y-4 text-muted">
                <?php echo wp_kses_post(wpautop($content)); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($quote) : ?>
          <figure class="bg-forest rounded-2xl p-8 text-left flex flex-col justify-center <?php echo $has_main ? '' : 'lg:col-span-2 max-w-2xl mx-auto w-full'; ?>">
            <?php rtc_icon('quote', 'w-8 h-8 text-canvas/50 mb-4 flex-shrink-0'); ?>
            <blockquote class="font-heading type-lg text-white mb-5">
              <?php echo esc_html($quote); ?>
            </blockquote>
            <?php if ($author) : ?>
              <figcaption class="text-canvas/65 type-sm font-body">
                — <?php echo esc_html($author); ?>
              </figcaption>
            <?php endif; ?>
          </figure>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>