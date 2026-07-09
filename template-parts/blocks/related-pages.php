<?php
defined('ABSPATH') || exit;

$heading    = $args['heading'] ?? 'Potrebbe interessarti anche';
$links      = $args['links'] ?? [];
$background = $args['background'] ?? 'no';
$margin_top = $args['margin_top'] ?? 'medio';
$bg_classes = [
  'canvas' => 'bg-canvas',
  'olive'  => 'bg-olive',
];
$bg_class      = $bg_classes[$background] ?? '';
$has_bg        = $background !== 'no' && $background !== '';
$is_olive      = $background === 'olive';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
$section_class = trim('block-related-pages ' . ($has_bg ? $bg_class . ' py-14 lg:py-16 ' : '') . $margin_top_class);

if (!$links) {
  return;
}
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal max-w-3xl">
      <?php if ($heading) : ?>
        <h3 class="font-heading font-semibold type-base mb-6 <?php echo $is_olive ? 'text-white' : 'text-forest'; ?> rich-text"><?php echo wp_kses_post($heading); ?></h3>
      <?php endif; ?>
      <div class="flex flex-wrap gap-3">
        <?php foreach ($links as $row) : ?>
          <?php
          $label = $row['label'] ?? '';
          $href  = '';

          if (!empty($row['link']) && is_array($row['link'])) {
            $href = $row['link']['url'] ?? '';
          } elseif (!empty($row['url'])) {
            $href = (strpos($row['url'], 'http') === 0) ? $row['url'] : home_url($row['url']);
          }

          if (!$label || !$href) {
            continue;
          }

          $link_class = $is_olive
            ? 'inline-flex items-center gap-2 text-white hover:text-canvas type-sm font-heading font-medium transition-colors border border-white/25 hover:border-canvas/40 px-4 py-2 rounded-full'
            : 'inline-flex items-center gap-2 text-forest hover:text-accent type-sm font-heading font-medium transition-colors border border-forest/20 hover:border-accent/40 px-4 py-2 rounded-full';
          ?>
          <a href="<?php echo esc_url($href); ?>" class="<?php echo esc_attr($link_class); ?>">
            <?php echo esc_html($label); ?>
            <?php rtc_icon('chevron-right', 'w-3.5 h-3.5'); ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>