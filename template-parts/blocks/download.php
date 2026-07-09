<?php
defined('ABSPATH') || exit;

$heading        = $args['heading'] ?? '';
$text           = $args['text'] ?? '';
$download_file  = $args['download_file'] ?? null;
$download_label = $args['download_label'] ?? 'Scarica allegato';
$background     = $args['background'] ?? 'no';
$margin_top     = $args['margin_top'] ?? 'medio';
$bg_classes = [
  'canvas' => 'bg-canvas',
  'forest' => 'bg-forest',
];
$bg_class   = $bg_classes[$background] ?? '';
$has_bg     = $background !== 'no' && $background !== '';
$is_forest  = $background === 'forest';
$margin_top_classes = [
  'no'      => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
$section_class = trim('block-download ' . ($has_bg ? $bg_class . ' py-14 lg:py-16 ' : '') . $margin_top_class);

$download_url = '';
if (is_array($download_file) && !empty($download_file['url'])) {
  $download_url = $download_file['url'];
} elseif (is_numeric($download_file)) {
  $download_url = wp_get_attachment_url((int) $download_file) ?: '';
}

if (!$heading && !$text && !$download_url) {
  return;
}

$heading_id = 'download-' . wp_unique_id();
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal max-w-3xl">
      <?php if ($heading) : ?>
        <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-semibold type-xl <?php echo $is_forest ? 'text-white' : 'text-forest'; ?> rich-text"><?php echo wp_kses_post($heading); ?></h2>
      <?php endif; ?>
      <?php if ($text) : ?>
        <p class="<?php echo $is_forest ? 'text-white/80' : 'text-muted'; ?> <?php echo $heading ? 'mt-4' : ''; ?> rich-text"><?php echo wp_kses_post($text); ?></p>
      <?php endif; ?>
      <?php if ($download_url) : ?>
        <div class="<?php echo ($heading || $text) ? 'mt-6' : ''; ?>">
          <a href="<?php echo esc_url($download_url); ?>"
            target="_blank" rel="noopener noreferrer"
            class="btn-primary">
            <?php echo esc_html($download_label); ?>
            <?php rtc_icon('external-link', 'w-4 h-4'); ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>