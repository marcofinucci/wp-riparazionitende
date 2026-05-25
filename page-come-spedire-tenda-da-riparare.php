<?php
/**
 * Template: Come Spedire
 * URL: /come-spedire-tenda-da-riparare
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main">

  <!-- Header -->
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site">
      <nav aria-label="Breadcrumb" class="mb-5">
        <ol class="flex items-center gap-2 text-white/50 text-sm font-body flex-wrap">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
          <li aria-hidden="true"><span class="mx-1">/</span></li>
          <li class="text-canvas/80" aria-current="page">Come spedire</li>
        </ol>
      </nav>
      <h1 class="font-heading font-bold text-3xl md:text-4xl lg:text-5xl text-white leading-tight max-w-3xl">
        Come spedire una tenda da riparare
      </h1>
    </div>
  </section>

  <!-- Intro -->
  <section class="bg-cream py-14 lg:py-16">
    <div class="container-site">
      <div class="max-w-3xl text-muted text-lg leading-relaxed">
        <p>Prima di spedire o consegnare il materiale è necessario contattarci, inviare foto e compilare la scheda cliente o gruppo scout.</p>
      </div>
    </div>
  </section>

  <!-- Steps -->
  <section class="bg-canvas py-14 lg:py-16" aria-labelledby="procedura-heading">
    <div class="container-site">
      <div class="max-w-3xl">
        <h2 id="procedura-heading" class="section-subheading mb-8">Procedura</h2>
        <ol class="space-y-6">
          <?php
          $steps = [
            ['title' => 'Invia le foto',          'desc' => 'Fotografa la tenda e i danni. Invia le immagini tramite WhatsApp o email prima di qualsiasi altra operazione.'],
            ['title' => 'Compila la scheda',       'desc' => 'Compila la scheda cliente o gruppo scout con tutti i dati richiesti.'],
            ['title' => 'Attendi la valutazione',  'desc' => 'Ricevi una valutazione preliminare. Non spedire prima di averla ricevuta.'],
            ['title' => 'Spedisci il materiale',   'desc' => 'Spedisci solo il materiale richiesto, pulito, asciutto e confezionato correttamente. Inserisci una copia della scheda nel pacco.'],
            ['title' => 'Preventivo finale',       'desc' => 'Il preventivo viene confermato o aggiornato dopo il controllo fisico del materiale ricevuto.'],
          ];
          foreach ($steps as $i => $step) : ?>
            <li class="flex items-start gap-5">
              <div class="w-12 h-12 rounded-full bg-forest text-white font-heading font-bold text-xl flex items-center justify-center flex-shrink-0">
                <?php echo $i + 1; ?>
              </div>
              <div class="pt-1">
                <h3 class="font-heading font-semibold text-forest text-lg mb-1.5">
                  <?php echo esc_html($step['title']); ?>
                </h3>
                <p class="text-muted leading-relaxed">
                  <?php echo esc_html($step['desc']); ?>
                </p>
              </div>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </section>

  <!-- Regole -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="regole-heading">
    <div class="container-site">
      <div class="max-w-3xl">
        <h2 id="regole-heading" class="section-subheading mb-7">Regole per la spedizione</h2>
        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
          <?php
          $regole = [
            'Materiale pulito e asciutto',
            'Inviare solo le parti da riparare',
            'Non inviare sacche inutili',
            'Non inviare picchetti, corde o martelli',
            'Non inviare accessori inutili',
            'Inviare paleria solo se da riparare',
            'Inserire copia della scheda nel pacco',
            'Inviare copia della scheda via WhatsApp o email',
          ];
          foreach ($regole as $regola) : ?>
            <li class="flex items-start gap-3">
              <?php rtc_icon('check', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
              <span class="text-dark text-sm leading-relaxed"><?php echo esc_html($regola); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>

        <div class="bg-forest/5 border border-forest/15 rounded-2xl p-6">
          <p class="text-muted text-sm leading-relaxed">
            <strong class="text-forest font-semibold">Nota:</strong> Le istruzioni complete vengono fornite prima della spedizione. L'invio del materiale implica accettazione delle condizioni comunicate.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site text-center">
      <h2 class="font-heading font-bold text-2xl md:text-3xl text-white mb-4">Pronto per spedire?</h2>
      <p class="text-white/65 mb-8 max-w-lg mx-auto leading-relaxed">Inizia inviando le foto della tenda e dei danni tramite WhatsApp.</p>
      <a href="https://wa.me/393000000000?text=Salve%2C%20vorrei%20una%20valutazione%20per%20la%20riparazione%20di%20una%20tenda."
        target="_blank" rel="noopener noreferrer"
        class="btn-whatsapp text-base px-8 py-4">
        <?php rtc_whatsapp_icon('w-5 h-5'); ?>
        Invia foto su WhatsApp
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
