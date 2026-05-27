<?php
defined('ABSPATH') || exit;

$content = $args['content'] ?? '';

if (!$content) {
  return;
}
?>

<section class="bg-cream py-14 lg:py-16">
  <div class="container-site">
    <div class="max-w-3xl text-muted prose prose-lg">
      <?php echo wp_kses_post($content); ?>
    </div>
  </div>
</section>