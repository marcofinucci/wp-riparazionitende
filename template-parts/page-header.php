<?php
defined('ABSPATH') || exit;

$breadcrumb = $args['breadcrumb'] ?? get_the_title();
$h1         = $args['h1'] ?? get_the_title();
$subtitle   = $args['subtitle'] ?? '';

$header_thumb = get_the_post_thumbnail_url(get_queried_object_id(), 'hey-1920x1080');
?>

<section class="relative overflow-hidden bg-forest py-16 lg:py-20">
  <?php if ($header_thumb) : ?>
    <img
      src="<?php echo esc_url($header_thumb); ?>"
      alt=""
      aria-hidden="true"
      class="absolute inset-0 w-full h-full object-cover"
      loading="eager">
    <div class="absolute inset-0 bg-forest/80" aria-hidden="true"></div>
    <div class="absolute inset-0" aria-hidden="true"
      style="background: radial-gradient(ellipse at center, transparent 30%, rgba(0,0,0,0.30) 100%);">
    </div>
  <?php endif; ?>

  <div class="container-site relative z-10">
    <nav aria-label="Breadcrumb" class="mb-5">
      <ol class="flex items-center gap-2 text-white/50 text-sm font-body flex-wrap">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
        <li aria-hidden="true"><span class="mx-1">/</span></li>
        <li class="text-canvas/80" aria-current="page"><?php echo esc_html($breadcrumb); ?></li>
      </ol>
    </nav>

    <h1 class="font-heading font-bold text-3xl md:text-4xl lg:text-5xl text-white leading-tight max-w-3xl text-balance">
      <?php echo esc_html($h1); ?>
    </h1>

    <?php if ($subtitle) : ?>
      <p class="mt-4 text-white/65 text-lg leading-relaxed max-w-2xl">
        <?php echo esc_html($subtitle); ?>
      </p>
    <?php endif; ?>
  </div>
</section>
