<?php
defined('ABSPATH') || exit;

$breadcrumb = $args['breadcrumb'] ?? get_the_title();
$h1         = $args['h1'] ?? get_the_title();
$subtitle   = $args['subtitle'] ?? '';
$header_thumb = get_the_post_thumbnail_url(get_queried_object_id(), 'hey-1920x1080');
?>

<section class="relative overflow-hidden bg-forest-dark py-16 lg:py-20 min-h-80 flex items-center">
  <?php if ($header_thumb) : ?>
    <img
      src="<?php echo esc_url($header_thumb); ?>"
      alt=""
      aria-hidden="true"
      class="absolute inset-0 w-full h-full object-cover"
      loading="eager">
    <div class="absolute inset-0 bg-gradient-to-t from-forest-dark via-forest-dark/75 to-forest-dark/40" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-forest-dark/80 to-transparent" aria-hidden="true"></div>
  <?php endif; ?>

  <div class="absolute inset-0 bg-topo opacity-[0.06] pointer-events-none" aria-hidden="true"></div>

  <div class="reveal max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
    <nav aria-label="Breadcrumb" class="mb-5">
      <ol class="flex items-center gap-2 text-white/50 type-sm font-body flex-wrap">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
        <li aria-hidden="true"><span class="mx-1">/</span></li>
        <li class="text-canvas/80" aria-current="page"><?php echo esc_html($breadcrumb); ?></li>
      </ol>
    </nav>

    <h1 class="font-heading font-bold type-4xl text-white max-w-3xl text-balance">
      <?php echo esc_html($h1); ?>
    </h1>

    <?php if ($subtitle) : ?>
      <p class="mt-4 text-white/65 type-lg max-w-2xl">
        <?php echo esc_html($subtitle); ?>
      </p>
    <?php endif; ?>
  </div>
</section>