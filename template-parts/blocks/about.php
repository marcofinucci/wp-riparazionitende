<?php
defined('ABSPATH') || exit;

$eyebrow    = $args['eyebrow'] ?? '';
$heading    = $args['heading'] ?? '';
$content    = $args['content'] ?? '';
$stats      = $args['stats'] ?? [];
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no'      => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$heading && !$content) {
  return;
}

$heading_id = 'about-' . wp_unique_id();
$icon_map   = ['clock' => 'clock', 'badge-check' => 'badge-check', 'map' => 'map'];
?>

<section class="block-about bg-canvas py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div class="reveal">
        <?php if ($eyebrow) : ?>
          <p class="text-accent font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest mb-6 rich-text"><?php echo wp_kses_post($heading); ?></h2>
        <?php endif; ?>
        <?php if ($content) : ?>
          <div class="space-y-4 text-muted rich-text">
            <?php echo wp_kses_post(wpautop($content)); ?>
          </div>
        <?php endif; ?>
      </div>

      <?php if ($stats) : ?>
        <div class="reveal grid grid-cols-1 gap-4" style="--reveal-delay:120ms">
          <?php foreach ($stats as $stat) : ?>
            <?php
            $icon  = $stat['icon'] ?? 'clock';
            $value = $stat['value'] ?? '';
            $label = $stat['label'] ?? '';
            if (!$value && !$label) {
              continue;
            }
            $icon_name = $icon_map[$icon] ?? 'clock';
            ?>
            <div class="rounded-2xl p-7 border border-canvas-dark bg-cream/60">
              <div class="flex items-center gap-6">
                <div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0">
                  <?php rtc_icon($icon_name, 'w-7 h-7 text-accent'); ?>
                </div>
                <div class="flow">
                  <?php if ($value) : ?>
                    <p class="font-heading font-bold type-2xl text-forest"><?php echo esc_html($value); ?></p>
                  <?php endif; ?>
                  <?php if ($label) : ?>
                    <p class="text-muted type-sm mt-1"><?php echo esc_html($label); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>