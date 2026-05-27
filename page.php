<?php

/**
 * Generic page template.
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main">

  <!-- Page Header -->
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site">

      <!-- Breadcrumb -->
      <nav aria-label="Breadcrumb" class="mb-5">
        <ol class="flex items-center gap-2 text-white/50 text-sm font-body">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
          <li aria-hidden="true"><span class="mx-1">/</span></li>
          <li class="text-canvas/80" aria-current="page"><?php the_title(); ?></li>
        </ol>
      </nav>

      <h1 class="font-heading font-bold text-3xl md:text-4xl text-white leading-tight max-w-3xl">
        <?php the_title(); ?>
      </h1>
    </div>
  </section>

  <!-- Content -->
  <section class="bg-cream py-14 lg:py-16">
    <div class="container-site">
      <div class="max-w-3xl">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="prose prose-lg max-w-none">
              <?php the_content(); ?>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>