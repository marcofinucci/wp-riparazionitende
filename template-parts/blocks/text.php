<?php
defined('ABSPATH') || exit;

$text = $args['text'] ?? '';

if (!$text) {
    return;
}
?>

<section class="bg-cream py-14 lg:py-16">
  <div class="container-site">
    <div class="max-w-3xl text-muted text-lg leading-relaxed">
      <?php echo wpautop(esc_html($text)); ?>
    </div>
  </div>
</section>
