<?php
defined('ABSPATH') || exit;

$content = $args['content'] ?? '';

if (!$content) {
  return;
}
?>

<section class=" py-14 lg:py-16">
  <div class="container-site">
    <div class="max-w-3xl text-muted text-lg [&>*]:mt-4 [&>*:first-child]:mt-0 [&>:last-child]:mb-0">
      <?php echo wp_kses_post($content); ?>
    </div>
  </div>
</section>