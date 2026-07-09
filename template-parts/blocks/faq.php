<?php
defined('ABSPATH') || exit;

$eyebrow    = $args['eyebrow'] ?? '';
$heading    = $args['heading'] ?? 'Domande frequenti';
$items      = $args['items'] ?? [];
$background = $args['background'] ?? 'no';
if ($background === 'no' && !empty($args['bg_canvas'])) {
  $background = 'canvas';
}
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$items) {
  return;
}

$heading_id = 'faq-' . wp_unique_id();
$section_class = trim('block-faq ' . ($background === 'canvas' ? 'bg-canvas py-14 lg:py-16 ' : '') . $margin_top_class);
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ($eyebrow || $heading) : ?>
      <div class="reveal text-center mb-12">
        <?php if ($eyebrow) : ?>
          <p class="text-accent font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest rich-text"><?php echo wp_kses_post($heading); ?></h2>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="reveal max-w-3xl mx-auto" role="list">
      <?php foreach ($items as $i => $row) : ?>
        <?php
        $question = $row['question'] ?? ($row['q'] ?? '');
        $answer   = $row['answer'] ?? ($row['a'] ?? '');
        if (!$question || !$answer) {
          continue;
        }
        $item_id = $heading_id . '-' . $i;
        ?>
        <div class="border-b border-canvas-dark last:border-0" data-faq-item role="listitem">
          <button type="button" data-faq-trigger
            class="w-full flex items-center justify-between gap-4 py-5 text-left cursor-pointer group bg-transparent border-0"
            aria-expanded="false" aria-controls="<?php echo esc_attr($item_id); ?>">
            <span class="font-heading font-semibold text-forest type-base group-hover:text-accent transition-colors rich-text">
              <?php echo wp_kses_post($question); ?>
            </span>
            <?php rtc_icon('chevron-down', 'w-5 h-5 text-accent flex-shrink-0 transition-transform duration-200', ['data-faq-icon' => '']); ?>
          </button>
          <div id="<?php echo esc_attr($item_id); ?>" data-faq-content class="hidden pb-5">
            <p class="text-muted rich-text"><?php echo wp_kses_post($answer); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>