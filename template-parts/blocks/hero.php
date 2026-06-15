<?php
defined('ABSPATH') || exit;

$badge          = $args['badge'] ?? '';
$heading        = $args['heading'] ?? '';
$text           = $args['text'] ?? '';
$image          = $args['image'] ?? '';
$primary_link   = $args['primary_link'] ?? null;
$secondary_link = $args['secondary_link'] ?? null;

if (is_array($image)) {
  $image_id = (int) ($image['ID'] ?? 0);
} elseif (is_numeric($image)) {
  $image_id = (int) $image;
} else {
  $image_id = 0;
}

if (!$heading) {
  return;
}

$resolve_link = static function ($link): array {
  if (is_array($link)) {
    return [
      'url'    => $link['url'] ?? '',
      'title'  => $link['title'] ?? '',
      'target' => $link['target'] ?? '',
    ];
  }
  return ['url' => (string) $link, 'title' => '', 'target' => ''];
};

$primary   = $resolve_link($primary_link);
$secondary = $resolve_link($secondary_link);
?>

<section class="block-hero relative overflow-hidden bg-forest" aria-label="Hero">
  <?php if ($image_id) : ?>
    <?= wp_get_attachment_image($image_id, 'hey-1920x1080', false, [
      'class'         => 'absolute inset-0 w-full h-full object-cover object-bottom',
      'alt'           => '',
      'aria-hidden'   => 'true',
      'loading'       => 'eager',
      'fetchpriority' => 'high',
    ]) ?>
    <div class="absolute inset-0 bg-forest-dark/70" aria-hidden="true"></div>
  <?php endif; ?>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 lg:py-20">
    <div class="max-w-3xl">
      <?php if ($badge) : ?>
        <div class="inline-flex items-center gap-2 text-canvas type-xs font-heading font-semibold uppercase tracking-widest mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-canvas animate-pulse" aria-hidden="true"></span>
          <?php echo esc_html($badge); ?>
        </div>
      <?php endif; ?>

      <h1 class="font-heading text-balance font-bold type-5xl text-white mb-6">
        <?php echo nl2br(esc_html($heading)); ?>
      </h1>

      <?php if ($text) : ?>
        <p class="text-white type-lg mb-10 max-w-2xl">
          <?php echo esc_html($text); ?>
        </p>
      <?php endif; ?>

      <?php if ($primary['url'] || $secondary['url']) : ?>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
          <?php if ($primary['url']) : ?>
            <a href="<?php echo esc_url($primary['url']); ?>"
              class="btn-white"
              <?php echo $primary['target'] ? ' target="' . esc_attr($primary['target']) . '"' : ''; ?>>
              <?php echo esc_html($primary['title'] ?: 'Scopri di più'); ?>
            </a>
          <?php endif; ?>
          <?php if ($secondary['url']) : ?>
            <a href="<?php echo esc_url($secondary['url']); ?>"
              class="btn-outline-white"
              <?php echo $secondary['target'] ? ' target="' . esc_attr($secondary['target']) . '"' : ''; ?>>
              <?php echo esc_html($secondary['title'] ?: 'Scopri di più'); ?>
              <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>