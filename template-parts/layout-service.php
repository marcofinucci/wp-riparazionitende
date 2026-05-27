<?php

/**
 * Shared layout for service/utility inner pages.
 * Expects $rtc_page_data array passed via set_query_var().
 *
 * $rtc_page_data keys:
 *   h1           string   Main page heading
 *   intro        string[] Array of intro paragraphs
 *   lavorazioni  string[] List of main services (bullet list)
 *   extra_blocks array    Optional extra content blocks:
 *                           [ 'heading'=>'', 'items'=>[] ]  (for sub-lists)
 *   note         string   Optional note paragraph (e.g. pulizia/limiti)
 *   breadcrumb   string   Label for breadcrumb
 *   related_pages array   Optional: [ ['url'=>'', 'label'=>''] ]
 *   show_salewa  bool     Whether to show the Salewa mention
 */
defined('ABSPATH') || exit;

$d = get_query_var('rtc_page_data', []);

$h1            = $d['h1']            ?? get_the_title();
$intro         = $d['intro']         ?? [];
$lavorazioni   = $d['lavorazioni']   ?? [];
$extra_blocks  = $d['extra_blocks']  ?? [];
$note          = $d['note']          ?? '';
$breadcrumb    = $d['breadcrumb']    ?? get_the_title();
$related_pages = $d['related_pages'] ?? [];
$show_salewa   = $d['show_salewa']   ?? false;

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
        style="background: radial-gradient(ellipse at center, transparent 30%, rgba(0,0,0,0.30) 100%);">
      </div>
    <?php endif; ?>

    <div class="container-site relative z-10">
      <!-- Breadcrumb -->
      <nav aria-label="Breadcrumb" class="mb-5">
        <ol class="flex items-center gap-2 text-white/50 text-sm font-body flex-wrap">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
          <li aria-hidden="true"><span class="mx-1">/</span></li>
          <li class="text-canvas/80" aria-current="page"><?php echo esc_html($breadcrumb); ?></li>
        </ol>
      </nav>

      <h1 class="font-heading font-bold text-3xl md:text-4xl lg:text-5xl text-white !leading-tight max-w-3xl">
        <?php echo esc_html($h1); ?>
      </h1>
    </div>
  </section>

  <!-- Intro -->
  <?php if ($intro) : ?>
    <section class="bg-cream py-14 lg:py-16">
      <div class="container-site">
        <div class="max-w-3xl space-y-4 text-muted text-lg">
          <?php foreach ($intro as $para) : ?>
            <p><?php echo esc_html($para); ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Lavorazioni principali -->
  <?php if ($lavorazioni) : ?>
    <section class="bg-canvas py-14 lg:py-16" aria-labelledby="lavorazioni-heading">
      <div class="container-site">
        <div class="max-w-3xl">
          <h2 id="lavorazioni-heading" class="section-subheading mb-7">Lavorazioni principali</h2>
          <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <?php foreach ($lavorazioni as $item) : ?>
              <li class="flex items-start gap-3">
                <?php rtc_icon('check', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
                <span class="text-dark text-sm"><?php echo esc_html($item); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Extra blocks (sub-sections) -->
  <?php foreach ($extra_blocks as $block) : ?>
    <section class="bg-cream py-12 lg:py-14">
      <div class="container-site">
        <div class="max-w-3xl">
          <?php if (!empty($block['heading'])) : ?>
            <h2 class="section-subheading mb-6"><?php echo esc_html($block['heading']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($block['text'])) : ?>
            <p class="text-muted mb-5"><?php echo esc_html($block['text']); ?></p>
          <?php endif; ?>
          <?php if (!empty($block['items'])) : ?>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <?php foreach ($block['items'] as $item) : ?>
                <li class="flex items-start gap-3">
                  <span class="w-1.5 h-1.5 rounded-full bg-olive flex-shrink-0 mt-2"></span>
                  <span class="text-dark text-sm "><?php echo esc_html($item); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  <!-- Note -->
  <?php if ($note) : ?>
    <section class="bg-cream py-12 lg:py-14">
      <div class="container-site">
        <div class="max-w-3xl bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4">
          <?php rtc_icon('info', 'w-5 h-5 text-forest flex-shrink-0 mt-0.5'); ?>
          <p class="text-muted text-sm "><?php echo esc_html($note); ?></p>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Salewa mention -->
  <?php if ($show_salewa) : ?>
    <section class="bg-canvas py-12 lg:py-14">
      <div class="container-site">
        <div class="max-w-3xl flex flex-col sm:flex-row items-start sm:items-center gap-5 bg-cream rounded-2xl p-7 border border-canvas-dark/30">
          <div class="flex-1">
            <h3 class="font-heading font-semibold text-forest text-lg mb-2">Riparazioni anche su tende a marchio Salewa</h3>
            <p class="text-muted text-sm">Effettuiamo lavorazioni anche su tende a marchio Salewa.</p>
          </div>
          <a href="https://www.salewa.com" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-semibold text-sm transition-colors border border-forest/25 hover:border-olive/35 px-4 py-2.5 rounded-full flex-shrink-0">
            Visita Salewa
            <?php rtc_icon('external-link', 'w-4 h-4'); ?>
          </a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Related pages -->
  <?php if ($related_pages) : ?>
    <section class="bg-cream py-12 lg:py-14">
      <div class="container-site">
        <div class="max-w-3xl">
          <h3 class="font-heading font-semibold text-forest text-base mb-5">Potrebbe interessarti anche</h3>
          <div class="flex flex-wrap gap-3">
            <?php foreach ($related_pages as $rp) : ?>
              <a href="<?php echo esc_url(home_url($rp['url'])); ?>"
                class="inline-flex items-center gap-2 text-forest hover:text-olive text-sm font-heading font-medium transition-colors border border-forest/20 hover:border-olive/30 px-4 py-2 rounded-full">
                <?php echo esc_html($rp['label']); ?>
                <?php rtc_icon('chevron-right', 'w-3.5 h-3.5'); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- CTA finale -->
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site text-center">
      <h2 class="font-heading font-bold text-2xl md:text-3xl text-white mb-4">Hai una tenda da riparare?</h2>
      <p class="text-white/65 mb-8 max-w-lg mx-auto ">
        Invia foto della tenda e dei danni per ricevere una valutazione preliminare.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="https://wa.me/393000000000" target="_blank" rel="noopener noreferrer"
          class="btn-whatsapp">
          <?php rtc_whatsapp_icon('w-5 h-5'); ?>
          Contattaci su WhatsApp
        </a>
        <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
          class="btn-outline">
          Come spedire
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>