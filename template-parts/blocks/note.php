<?php
defined('ABSPATH') || exit;

$text = $args['text'] ?? '';

if (!$text) {
    return;
}
?>

<section class="bg-cream py-12 lg:py-14">
  <div class="container-site">
    <div class="max-w-3xl bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4">
      <?php rtc_icon('info', 'w-5 h-5 text-forest flex-shrink-0 mt-0.5'); ?>
      <p class="text-muted text-sm leading-relaxed"><?php echo esc_html($text); ?></p>
    </div>
  </div>
</section>
