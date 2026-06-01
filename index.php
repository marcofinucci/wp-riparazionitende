<?php

/**
 * Fallback template - redirects to front-page or shows blog loop.
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main" class="min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-14 lg:my-16">
    <?php if (have_posts()) : ?>
      <h1 class="font-heading font-bold type-3xl text-forest mb-8"><?php esc_html_e('Articoli', 'riparazionetende'); ?></h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <a href="<?php the_permalink(); ?>" class="bg-cream rounded-2xl p-6 border border-canvas hover:border-olive/30 hover:shadow-md transition-all duration-200 cursor-pointer group block no-underline text-inherit">
              <h2 class="font-heading font-semibold text-forest type-lg group-hover:text-olive transition-colors">
                <?php the_title(); ?>
              </h2>
              <p class="text-muted type-sm"><?php the_excerpt(); ?></p>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
    <?php else : ?>
      <p class="text-muted"><?php esc_html_e('Nessun contenuto trovato.', 'riparazionetende'); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>