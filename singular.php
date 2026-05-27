<?php

/**
 * Generic page template.
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main">
  <!-- Page Header -->
  <?php $header_thumb = get_the_post_thumbnail_url(get_queried_object_id(), 'hey-1920x1080'); ?>
  <section class="relative overflow-hidden bg-forest py-16 lg:py-20">
    <?php if ($header_thumb) : ?>
      <img
        src="<?php echo esc_url($header_thumb); ?>"
        alt=""
        aria-hidden="true"
        class="absolute inset-0 w-full h-full object-cover"
        loading="eager">
      <!-- Dark overlay -->
      <div class="absolute inset-0 bg-forest/80" aria-hidden="true"></div>
      <!-- Vignette -->
      <div class="absolute inset-0" aria-hidden="true"
        style="background: radial-gradient(ellipse at center, transparent 40%, rgba(0,0,0,0.30) 100%);">
      </div>
    <?php endif; ?>

    <div class="container-site relative z-10">
      <!-- Breadcrumb -->
      <nav aria-label="Breadcrumb" class="mb-5">
        <ol class="flex items-center gap-2 text-white/50 text-sm font-body">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
          <li aria-hidden="true"><span class="mx-1">/</span></li>
          <li class="text-canvas/80" aria-current="page"><?php the_title(); ?></li>
        </ol>
      </nav>

      <!-- Page Title -->
      <h1 class="font-heading font-bold text-3xl md:text-4xl text-white !leading-tight max-w-3xl">
        <?php the_title(); ?>
      </h1>
    </div>
  </section>

  <!-- Content -->
  <section class="my-14 lg:my-16">
    <div class="container-site">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="max-w-3xl [&>:first-child]:mt-0 [&>:last-child]:mb-0">
            <?php the_content(); ?>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>