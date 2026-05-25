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
              <svg class="w-5 h-5 text-olive flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
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
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        Invia foto su WhatsApp
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
