<?php
defined('ABSPATH') || exit;

$heading = $args['heading'] ?? 'Domande frequenti';
$items   = $args['items'] ?? [];
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
?>

<section class="<?php echo esc_attr(trim($margin_top_class . ' py-14 lg:py-16')); ?>" aria-labelledby="<?php echo esc_attr($heading_id); ?>">
  <div class="container-site max-w-3xl">
    <?php if ($heading) : ?>
      <h2 id="<?php echo esc_attr($heading_id); ?>" class="section-subheading mb-8"><?php echo esc_html($heading); ?></h2>
    <?php endif; ?>
    <div class="rounded-2xl border border-canvas-dark/30  overflow-hidden">
      <?php foreach ($items as $i => $row) : ?>
        <?php
        $question = $row['question'] ?? ($row['q'] ?? '');
        $answer   = $row['answer'] ?? ($row['a'] ?? '');
        if (!$question || !$answer) {
          continue;
        }
        $item_id = $heading_id . '-' . $i;
        ?>
        <div class="faq-item px-5" data-faq-item>
          <button type="button" data-faq-trigger
            class="w-full flex items-center justify-between gap-4 py-5 text-left cursor-pointer"
            aria-expanded="false" aria-controls="<?php echo esc_attr($item_id); ?>">
            <span class="font-heading font-medium text-forest text-sm md:text-base">
              <?php echo esc_html($question); ?>
            </span>
            <?php rtc_icon('chevron-down', 'w-5 h-5 text-olive flex-shrink-0 transition-transform duration-200', ['data-faq-icon' => '']); ?>
          </button>
          <div id="<?php echo esc_attr($item_id); ?>" data-faq-content class="hidden pb-5">
            <p class="text-muted text-sm "><?php echo esc_html($answer); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>