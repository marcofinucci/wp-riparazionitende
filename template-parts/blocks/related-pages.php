<?php
defined('ABSPATH') || exit;

$heading = $args['heading'] ?? 'Potrebbe interessarti anche';
$links   = $args['links'] ?? [];
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$links) {
  return;
}
?>

<section class="block-related-pages <?php echo esc_attr($margin_top_class); ?>">
  <div class="container-site">
    <div class="max-w-3xl">
      <?php if ($heading) : ?>
        <h3 class="font-heading font-semibold text-forest text-base mb-5"><?php echo esc_html($heading); ?></h3>
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
          ?>
          <a href="<?php echo esc_url($href); ?>"
            class="inline-flex items-center gap-2 text-forest hover:text-olive text-sm font-heading font-medium transition-colors border border-forest/20 hover:border-olive/30 px-4 py-2 rounded-full">
            <?php echo esc_html($label); ?>
            <?php rtc_icon('chevron-right', 'w-3.5 h-3.5'); ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>