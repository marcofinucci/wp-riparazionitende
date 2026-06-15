<?php

/**
 * 404 — Pagina non trovata
 */
defined('ABSPATH') || exit;

status_header(404);
nocache_headers();

get_header();
?>

<main id="main">
  <?php
  get_template_part('template-parts/page', 'header', [
    'breadcrumb' => __('Pagina non trovata', 'riparazionetende'),
    'h1'         => __('Pagina non trovata', 'riparazionetende'),
    'subtitle'   => __('Il percorso che hai seguito non porta a nessuna pagina del sito. Forse il link è cambiato o la pagina non esiste più.', 'riparazionetende'),
  ]);
  ?>

  <section class="my-14 lg:my-16" aria-labelledby="error-404-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="reveal max-w-xl mx-auto text-center">

        <h2 id="error-404-heading" class="font-heading font-semibold type-xl text-forest mb-2">
          404
        </h2>

        <p class="text-muted mb-8">
          <?php esc_html_e('Torna alla home per esplorare i nostri servizi di riparazione tende.', 'riparazionetende'); ?>
        </p>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary justify-center">
          <?php esc_html_e('Torna alla home', 'riparazionetende'); ?>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>