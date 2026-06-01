<?php
defined('ABSPATH') || exit;

$eyebrow      = $args['eyebrow'] ?? '';
$heading      = $args['heading'] ?? '';
$intro        = $args['intro'] ?? '';
$steps        = $args['steps'] ?? [];
$button_link  = $args['button_link'] ?? null;
$button_label = $args['button_label'] ?? '';
$margin_top   = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no'      => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$steps) {
  return;
}

$heading_id = 'steps-grid-' . wp_unique_id();

if (is_array($button_link)) {
  $btn_url    = $button_link['url'] ?? '';
  $btn_target = $button_link['target'] ?? '';
} else {
  $btn_url    = (string) $button_link;
  $btn_target = '';
}
?>

<section class="block-steps-grid <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ($eyebrow || $heading || $intro) : ?>
      <div class="text-center mb-12">
        <?php if ($eyebrow) : ?>
          <p class="text-olive font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($intro) : ?>
          <p class="text-muted mt-4 max-w-lg mx-auto"><?php echo esc_html($intro); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="relative">
      <div class="hidden lg:block absolute top-[2.5rem] left-[calc(10%+2.5rem)] right-[calc(10%+2.5rem)] h-px bg-canvas-dark/60 z-0" aria-hidden="true"></div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-4 relative z-10">
        <?php foreach ($steps as $i => $step) : ?>
          <?php
          $title = is_array($step) ? ($step['title'] ?? '') : '';
          $desc  = is_array($step) ? ($step['description'] ?? ($step['desc'] ?? '')) : '';
          if (!$title && !$desc) {
            continue;
          }
          ?>
          <div class="flex flex-col items-center text-center gap-4 rounded-2xl p-5 border border-canvas-dark/20 bg-cream">
            <div class="w-12 h-12 rounded-full bg-forest text-white font-heading font-bold type-xl flex items-center justify-center shadow-sm">
              <?php echo $i + 1; ?>
            </div>
            <div>
              <?php if ($title) : ?>
                <h3 class="font-heading font-semibold text-forest type-base mb-1.5"><?php echo esc_html($title); ?></h3>
              <?php endif; ?>
              <?php if ($desc) : ?>
                <p class="text-muted type-sm"><?php echo esc_html($desc); ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?php if ($btn_url) : ?>
      <div class="text-center mt-10">
        <a href="<?php echo esc_url($btn_url); ?>"
          class="btn-primary"
          <?php echo $btn_target ? ' target="' . esc_attr($btn_target) . '"' : ''; ?>>
          <?php echo esc_html($button_label ?: 'Scopri di più'); ?>
          <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>