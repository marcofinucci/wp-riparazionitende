<?php
/**
 * Fallback template - redirects to front-page or shows blog loop.
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main" class="pt-20 min-h-screen">
  <div class="container-site py-16">
    <?php if (have_posts()) : ?>
      <h1 class="section-heading mb-8"><?php esc_html_e('Articoli', 'riparazionetende'); ?></h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
          <article class="card">
            <h2 class="font-heading font-semibold text-forest text-lg">
              <a href="<?php the_permalink(); ?>" class="hover:text-olive transition-colors"><?php the_title(); ?></a>
            </h2>
            <p class="text-muted text-sm"><?php the_excerpt(); ?></p>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p class="text-muted"><?php esc_html_e('Nessun contenuto trovato.', 'riparazionetende'); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
