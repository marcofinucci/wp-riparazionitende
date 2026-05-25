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
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site">

      <!-- Breadcrumb -->
      <nav aria-label="Breadcrumb" class="mb-5">
        <ol class="flex items-center gap-2 text-white/50 text-sm font-body flex-wrap">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
          <li aria-hidden="true"><span class="mx-1">/</span></li>
          <li class="text-canvas/80" aria-current="page"><?php echo esc_html($breadcrumb); ?></li>
        </ol>
      </nav>

      <h1 class="font-heading font-bold text-3xl md:text-4xl lg:text-5xl text-white leading-tight max-w-3xl">
        <?php echo esc_html($h1); ?>
      </h1>
    </div>
  </section>

  <!-- Intro -->
  <?php if ($intro) : ?>
  <section class="bg-cream py-14 lg:py-16">
    <div class="container-site">
      <div class="max-w-3xl space-y-4 text-muted text-lg leading-relaxed">
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
              <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span class="text-dark text-sm leading-relaxed"><?php echo esc_html($item); ?></span>
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
          <p class="text-muted leading-relaxed mb-5"><?php echo esc_html($block['text']); ?></p>
        <?php endif; ?>
        <?php if (!empty($block['items'])) : ?>
          <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <?php foreach ($block['items'] as $item) : ?>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-olive flex-shrink-0 mt-2"></span>
                <span class="text-dark text-sm leading-relaxed"><?php echo esc_html($item); ?></span>
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
  <section class="bg-cream py-10">
    <div class="container-site">
      <div class="max-w-3xl bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4">
        <svg class="w-5 h-5 text-forest flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <p class="text-muted text-sm leading-relaxed"><?php echo esc_html($note); ?></p>
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
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
          </svg>
        </a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Related pages -->
  <?php if ($related_pages) : ?>
  <section class="bg-cream py-12">
    <div class="container-site">
      <div class="max-w-3xl">
        <h3 class="font-heading font-semibold text-forest text-base mb-5">Potrebbe interessarti anche</h3>
        <div class="flex flex-wrap gap-3">
          <?php foreach ($related_pages as $rp) : ?>
            <a href="<?php echo esc_url(home_url($rp['url'])); ?>"
              class="inline-flex items-center gap-2 text-forest hover:text-olive text-sm font-heading font-medium transition-colors border border-forest/20 hover:border-olive/30 px-4 py-2 rounded-full">
              <?php echo esc_html($rp['label']); ?>
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
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
      <p class="text-white/65 mb-8 max-w-lg mx-auto leading-relaxed">
        Invia foto della tenda e dei danni per ricevere una valutazione preliminare.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="https://wa.me/393000000000" target="_blank" rel="noopener noreferrer"
          class="btn-whatsapp text-base px-7 py-3.5 justify-center">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
          Contattaci su WhatsApp
        </a>
        <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
          class="btn-outline text-base px-7 py-3.5 justify-center">
          Come spedire
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
