<?php
defined('ABSPATH') || exit;

$heading = $args['heading'] ?? 'Procedura';
$steps   = $args['steps'] ?? [];
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$steps) {
  return;
}

$heading_id = 'steps-' . wp_unique_id();
?>

<section class="block-steps bg-canvas py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl">
      <?php if ($heading) : ?>
        <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-semibold type-xl text-forest mb-8"><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>
      <ol class="space-y-6">
        <?php foreach ($steps as $i => $step) : ?>
          <?php
          $title = is_array($step) ? ($step['title'] ?? '') : '';
          $desc  = is_array($step) ? ($step['description'] ?? ($step['desc'] ?? '')) : '';
          if (!$title && !$desc) {
            continue;
          }
          ?>
          <li class="flex items-start gap-5">
            <div class="w-12 h-12 rounded-full bg-forest text-white font-heading font-bold type-xl flex items-center justify-center flex-shrink-0">
              <?php echo $i + 1; ?>
            </div>
            <div class="pt-1">
              <?php if ($title) : ?>
                <h3 class="font-heading font-semibold text-forest type-lg mb-1.5"><?php echo esc_html($title); ?></h3>
              <?php endif; ?>
              <?php if ($desc) : ?>
                <p class="text-muted "><?php echo esc_html($desc); ?></p>
              <?php endif; ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>