<?php
defined('ABSPATH') || exit;

$eyebrow    = $args['eyebrow'] ?? '';
$heading    = $args['heading'] ?? 'Domande frequenti';
$items      = $args['items'] ?? [];
$centered   = !empty($args['centered']);
$bg_canvas  = !empty($args['bg_canvas']);
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
$section_class = trim('block-faq ' . ($bg_canvas ? 'bg-canvas py-14 lg:py-16 ' : '') . $margin_top_class);
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <div class="container-site<?php echo $centered ? '' : ' max-w-3xl'; ?>">
    <?php if ($centered && ($eyebrow || $heading)) : ?>
      <div class="text-center mb-12">
        <?php if ($eyebrow) : ?>
          <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="section-heading"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
      </div>
    <?php elseif ($heading) : ?>
      <h2 id="<?php echo esc_attr($heading_id); ?>" class="section-subheading mb-8"><?php echo esc_html($heading); ?></h2>
    <?php endif; ?>

    <div class="<?php echo $centered ? 'max-w-3xl mx-auto' : ''; ?>" role="list">
      <?php if (!$centered) : ?>
        <div class="rounded-2xl border border-canvas-dark/30 overflow-hidden">
        <?php endif; ?>
        <?php foreach ($items as $i => $row) : ?>
          <?php
          $question = $row['question'] ?? ($row['q'] ?? '');
          $answer   = $row['answer'] ?? ($row['a'] ?? '');
          if (!$question || !$answer) {
            continue;
          }
          $item_id = $heading_id . '-' . $i;
          $item_class = $centered ? 'faq-item' : 'faq-item px-5';
          $btn_class = $centered
            ? 'w-full flex items-center justify-between gap-4 py-5 text-left cursor-pointer group bg-transparent border-0'
            : 'w-full flex items-center justify-between gap-4 py-5 text-left cursor-pointer';
          $q_class = $centered
            ? 'font-heading font-semibold text-forest text-base group-hover:text-olive transition-colors'
            : 'font-heading font-medium text-forest text-sm md:text-base';
          ?>
          <div class="<?php echo esc_attr($item_class); ?>" data-faq-item role="listitem">
            <button type="button" data-faq-trigger
              class="<?php echo esc_attr($btn_class); ?>"
              aria-expanded="false" aria-controls="<?php echo esc_attr($item_id); ?>">
              <span class="<?php echo esc_attr($q_class); ?>">
                <?php echo esc_html($question); ?>
              </span>
              <?php rtc_icon('chevron-down', 'w-5 h-5 text-olive flex-shrink-0 transition-transform duration-200', ['data-faq-icon' => '']); ?>
            </button>
            <div id="<?php echo esc_attr($item_id); ?>" data-faq-content class="hidden pb-5">
              <p class="text-muted <?php echo $centered ? '' : 'text-sm'; ?>"><?php echo esc_html($answer); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
        <?php if (!$centered) : ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>