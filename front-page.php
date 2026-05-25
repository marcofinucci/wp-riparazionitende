<?php

/**
 * Template: Homepage
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main">

  <!-- =====================================================================
       HERO
  ===================================================================== -->
  <section class="relative overflow-hidden bg-forest" aria-label="Hero">

    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10" aria-hidden="true"
      style="background-image: repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(255,255,255,0.15) 39px, rgba(255,255,255,0.15) 40px), repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(255,255,255,0.15) 39px, rgba(255,255,255,0.15) 40px);">
    </div>

    <!-- Decorative gradient bottom -->
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-forest-dark/60 to-transparent" aria-hidden="true"></div>

    <div class="container-site relative z-10 py-24 md:py-32 lg:py-40">
      <div class="max-w-3xl">

        <!-- Eyebrow -->
        <div class="inline-flex items-center gap-2 bg-olive/30 border border-olive/50 text-canvas text-xs font-heading font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-canvas animate-pulse" aria-hidden="true"></span>
          Laboratorio artigianale specializzato
        </div>

        <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white leading-tight mb-6">
          Riparazione tende<br>
          <span class="text-canvas">da campeggio</span><br>
          in tutta Italia
        </h1>

        <p class="text-white/75 text-lg md:text-xl leading-relaxed mb-10 max-w-2xl">
          Laboratorio artigianale specializzato nella manutenzione e riparazione di tende scout, verande roulotte, tende carrello, tende igloo, paleria e tende tecniche outdoor.<br>
          <span class="text-canvas/80">Riceviamo materiali da tutta Italia tramite spedizione.</span>
        </p>

        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
          <a href="https://wa.me/393000000000?text=Salve%2C%20vorrei%20una%20valutazione%20per%20la%20riparazione%20di%20una%20tenda."
            target="_blank" rel="noopener noreferrer"
            class="btn-whatsapp text-base px-7 py-3.5">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
            Invia foto su WhatsApp
          </a>
          <a href="<?php echo esc_url(home_url('/contatti')); ?>"
            class="btn-outline text-base px-7 py-3.5">
            Richiedi una valutazione
          </a>
          <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
            class="inline-flex items-center gap-2 text-canvas/80 hover:text-canvas text-base font-heading font-medium transition-colors px-2 py-3.5">
            Scopri come spedire
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       TRUST BAR / STAT COUNTER
  ===================================================================== -->
  <section class="bg-olive" aria-label="Numeri chiave">
    <div class="container-site py-8 lg:py-10">
      <div class="grid grid-cols-1 sm:grid-cols-3 divide-y sm:divide-y-0 sm:divide-x divide-white/20">

        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <span class="font-heading font-bold text-3xl text-white">Dal 1990</span>
          <span class="text-white/70 text-sm mt-1 font-body">Esperienza nel settore</span>
        </div>

        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <span class="font-heading font-bold text-3xl text-white">Migliaia</span>
          <span class="text-white/70 text-sm mt-1 font-body">di tende riparate dal 2004</span>
        </div>

        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <span class="font-heading font-bold text-3xl text-white">Tutta Italia</span>
          <span class="text-white/70 text-sm mt-1 font-body">Lavorazioni tramite spedizione</span>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       SERVIZI
  ===================================================================== -->
  <section class="bg-cream py-20 lg:py-24" aria-labelledby="servizi-heading">
    <div class="container-site">

      <div class="text-center mb-12">
        <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3">I nostri servizi</p>
        <h2 id="servizi-heading" class="section-heading">Che tipo di tenda devi riparare?</h2>
        <p class="text-muted mt-4 max-w-xl mx-auto">
          Siamo specializzati in diverse tipologie di tende e strutture outdoor. Ogni lavorazione viene valutata su materiale reale.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">

        <?php
        $services_home = [
          [
            'url'   => '/riparazione-tende-scout',
            'title' => 'Riparazione tende scout',
            'desc'  => 'Siamo specializzati nella manutenzione di tende scout di squadriglia (tende canadesi). Interveniamo su catino, telo, cerniere, occhielli, rinforzi, sacche e paleria.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21l9-18 9 18M3 21h18M12 3v18M7 21l5-10 5 10"/>',
            'badge' => 'Core service',
          ],
          [
            'url'   => '/riparazione-verande-roulotte',
            'title' => 'Riparazione verande roulotte',
            'desc'  => 'Lavorazioni su verande utilizzate in campeggi stagionali: zanzariere, finestre, cerniere, cursori, cordoli, guide, fascioni perimetrali e cucinotti.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
            'badge' => null,
          ],
          [
            'url'   => '/manutenzione-tende-carrello',
            'title' => 'Tende carrello e stagionali',
            'desc'  => 'Le tende carrello e le strutture stagionali in cotone richiedono manutenzione periodica per mantenere durata, impermeabilità e funzionalità.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-tende-trekking-igloo',
            'title' => 'Trekking / Igloo / Outdoor',
            'desc'  => 'Riparazioni su tende trekking, igloo e outdoor: stecche rotte, paleria piegata, cerniere rotte, strappi, finestrelle scollate e zanzariere danneggiate.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-paleria-tende',
            'title' => 'Riparazione paleria e stecche',
            'desc'  => 'Ripariamo e sostituiamo paleria per tende igloo, trekking e campeggio: stecche in vetroresina, alluminio, elastici interni, segmenti e punte paleria.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-tende-speciali',
            'title' => 'Tende speciali e outdoor',
            'desc'  => 'Valutiamo interventi su tende da tetto auto, carpfishing, tarp bushcraft, glamping, tende a campana, yurta, tepee e tende medievali.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>',
            'badge' => null,
          ],
        ];

        foreach ($services_home as $service) : ?>
          <article class="service-card group">
            <div class="flex items-start justify-between">
              <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <?php echo $service['icon']; ?>
                </svg>
              </div>
              <?php if ($service['badge']) : ?>
                <span class="text-xs font-heading font-semibold text-olive bg-olive/10 px-2.5 py-1 rounded-full">
                  <?php echo esc_html($service['badge']); ?>
                </span>
              <?php endif; ?>
            </div>
            <div class="flex-1">
              <h3 class="font-heading font-semibold text-forest text-lg leading-snug mb-2">
                <?php echo esc_html($service['title']); ?>
              </h3>
              <p class="text-muted text-sm leading-relaxed">
                <?php echo esc_html($service['desc']); ?>
              </p>
            </div>
            <a href="<?php echo esc_url(home_url($service['url'])); ?>"
              class="inline-flex items-center gap-1.5 text-olive hover:text-forest text-sm font-heading font-semibold transition-colors group-hover:gap-2.5 mt-auto">
              Scopri di più
              <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </article>
        <?php endforeach; ?>

      </div>

      <!-- Associazioni link -->
      <div class="mt-8 text-center">
        <a href="<?php echo esc_url(home_url('/riparazione-tende-associazioni-eventi')); ?>"
          class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-medium text-sm transition-colors border border-forest/20 hover:border-olive/30 px-5 py-2.5 rounded-full">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          Anche per Associazioni e strutture (Protezione Civile, Pro Loco, Croce Rossa…)
        </a>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       AUTOREVOLEZZA
  ===================================================================== -->
  <section class="bg-canvas py-20 lg:py-24" aria-labelledby="autorevolezza-heading">
    <div class="container-site">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <div>
          <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3">Chi siamo</p>
          <h2 id="autorevolezza-heading" class="section-heading mb-6">
            Una specializzazione costruita nel tempo
          </h2>
          <div class="space-y-4 text-muted leading-relaxed">
            <p>
              Le prime riparazioni nascono alla fine degli anni '90 lavorando principalmente con gruppi scout abruzzesi.
            </p>
            <p>
              Con il tempo, grazie al passaparola tra gruppi, campeggiatori e appassionati outdoor, l'attività si è sviluppata fino a ricevere tende da tutta Italia tramite spedizione.
            </p>
            <p>
              Oggi ci occupiamo della manutenzione e riparazione di tende scout di squadriglia, verande roulotte, tende carrello, tende outdoor, tende trekking, paleria e strutture tecniche.
            </p>
          </div>
        </div>

        <!-- Stats grid -->
        <div class="grid grid-cols-1 gap-4">
          <div class="bg-cream rounded-2xl p-7 border border-canvas-dark/40">
            <div class="flex items-center gap-5">
              <div class="w-14 h-14 rounded-xl bg-forest/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <p class="font-heading font-bold text-2xl text-forest">Dal 1990</p>
                <p class="text-muted text-sm">Esperienza nel settore delle riparazioni</p>
              </div>
            </div>
          </div>

          <div class="bg-cream rounded-2xl p-7 border border-canvas-dark/40">
            <div class="flex items-center gap-5">
              <div class="w-14 h-14 rounded-xl bg-olive/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
              </div>
              <div>
                <p class="font-heading font-bold text-2xl text-forest">Migliaia di tende</p>
                <p class="text-muted text-sm">Riparate dal 2004 ad oggi</p>
              </div>
            </div>
          </div>

          <div class="bg-cream rounded-2xl p-7 border border-canvas-dark/40">
            <div class="flex items-center gap-5">
              <div class="w-14 h-14 rounded-xl bg-forest/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
              </div>
              <div>
                <p class="font-heading font-bold text-2xl text-forest">Tutta Italia</p>
                <p class="text-muted text-sm">Lavorazioni gestite tramite spedizione</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       COME FUNZIONA
  ===================================================================== -->
  <section class="bg-cream py-20 lg:py-24" aria-labelledby="come-funziona-heading">
    <div class="container-site">

      <div class="text-center mb-12">
        <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3">Il processo</p>
        <h2 id="come-funziona-heading" class="section-heading">Come funziona</h2>
        <p class="text-muted mt-4 max-w-lg mx-auto">
          Prima di spedire il materiale è necessario contattarci e attendere le istruzioni.
        </p>
      </div>

      <!-- Steps: desktop horizontal, mobile vertical -->
      <div class="relative">

        <!-- Connecting line (desktop only) -->
        <div class="hidden lg:block absolute top-[2.5rem] left-[calc(10%+2.5rem)] right-[calc(10%+2.5rem)] h-px bg-canvas-dark/60 z-0" aria-hidden="true"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-4 relative z-10">

          <?php
          $steps_home = [
            ['num' => '1', 'title' => 'Invia le foto', 'desc' => 'Fotografa la tenda e i danni e inviaci le immagini tramite WhatsApp o email.'],
            ['num' => '2', 'title' => 'Compila la scheda', 'desc' => 'Compila la scheda cliente o gruppo scout con tutte le informazioni necessarie.'],
            ['num' => '3', 'title' => 'Valutazione', 'desc' => 'Ricevi una valutazione preliminare prima di qualsiasi spedizione.'],
            ['num' => '4', 'title' => 'Spedisci', 'desc' => 'Spedisci solo il materiale richiesto, pulito, asciutto e lavorabile.'],
            ['num' => '5', 'title' => 'Preventivo finale', 'desc' => 'Il preventivo viene confermato o aggiornato dopo il controllo del materiale.'],
          ];
          foreach ($steps_home as $step) : ?>
            <div class="flex flex-col items-center text-center gap-4 bg-cream rounded-2xl p-5 border border-canvas-dark/20">
              <div class="w-12 h-12 rounded-full bg-forest text-white font-heading font-bold text-xl flex items-center justify-center shadow-sm">
                <?php echo esc_html($step['num']); ?>
              </div>
              <div>
                <h3 class="font-heading font-semibold text-forest text-base mb-1.5">
                  <?php echo esc_html($step['title']); ?>
                </h3>
                <p class="text-muted text-sm leading-relaxed">
                  <?php echo esc_html($step['desc']); ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="text-center mt-10">
        <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
          class="btn-primary">
          Leggi le istruzioni complete
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>

    </div>
  </section>

  <!-- =====================================================================
       MAPPA ITALIA
  ===================================================================== -->
  <section class="bg-forest py-20 lg:py-24" aria-labelledby="mappa-heading">
    <div class="container-site">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <div>
          <p class="text-canvas/70 font-heading font-semibold text-sm uppercase tracking-widest mb-3">Copertura nazionale</p>
          <h2 id="mappa-heading" class="font-heading font-bold text-3xl md:text-4xl text-white leading-tight mb-6">
            Riceviamo tende<br>da tutta Italia
          </h2>
          <p class="text-white/65 leading-relaxed mb-6">
            Lavoriamo con gruppi scout, campeggiatori stagionali, escursionisti, pescatori e appassionati outdoor provenienti da tutta Italia.
          </p>
          <p class="text-white/65 leading-relaxed mb-8">
            La maggior parte delle lavorazioni viene gestita tramite spedizione. Riceviamo tende da tutte le regioni italiane.
          </p>
          <p class="text-canvas/80 text-sm italic leading-relaxed">
            Riceviamo spedizioni da Roma, Milano, Torino, Napoli, Palermo, Bologna, Firenze, Bari, Genova, Padova e da molte altre città italiane.
          </p>
        </div>

        <!-- Italy map SVG (simplified stylized) -->
        <div class="flex items-center justify-center">
          <div class="relative w-full max-w-xs lg:max-w-sm" aria-label="Mappa dell'Italia con punti di provenienza delle spedizioni">
            <svg viewBox="0 0 280 420" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full drop-shadow-xl" role="img" aria-hidden="true">
              <!-- Italy mainland simplified -->
              <path d="M95,25 C100,15 115,12 125,18 C135,24 148,20 158,28 C168,36 170,50 165,62 C160,74 162,85 168,95 C174,105 172,118 165,128 C158,138 155,150 160,162 C165,174 168,188 165,200 C162,212 168,225 175,235 C182,245 188,258 185,270 C182,282 178,292 180,302 C182,312 180,322 175,330 C170,338 165,345 162,352 C158,360 152,365 148,370 C144,375 138,378 134,372 C130,366 128,358 130,350 C132,342 128,334 122,328 C116,322 112,314 114,306 C116,298 115,290 110,284 C105,278 100,270 96,262 C92,254 90,244 88,234 C86,224 82,215 78,206 C74,197 72,186 74,176 C76,166 72,155 68,146 C64,137 62,126 65,116 C68,106 65,95 62,85 C59,75 58,62 63,52 C68,42 78,32 87,27 Z"
                fill="#3D6B4F" opacity="0.8" />
              <!-- Boot leg area -->
              <path d="M155,285 C160,295 165,308 162,320 C159,332 155,342 150,350 C145,355 140,358 136,362 C132,366 130,372 132,378 C130,375 126,370 122,365 C118,360 116,352 118,344 C120,336 116,328 110,322"
                fill="#3D6B4F" opacity="0.6" />
              <!-- Sicily -->
              <path d="M100,385 C108,378 120,375 130,379 C138,383 140,390 135,395 C130,400 118,402 110,398 C102,394 96,390 100,385 Z"
                fill="#3D6B4F" opacity="0.7" />
              <!-- Sardinia -->
              <path d="M20,185 C26,178 35,175 42,180 C49,185 50,195 46,203 C42,211 34,215 27,212 C20,209 16,200 18,192 Z"
                fill="#3D6B4F" opacity="0.65" />

              <!-- Location dots (various cities) -->
              <!-- North -->
              <circle cx="130" cy="55" r="4" fill="#D8CBB3" opacity="0.9" /> <!-- Milano area -->
              <circle cx="148" cy="65" r="3" fill="#D8CBB3" opacity="0.8" /> <!-- Veneto -->
              <circle cx="108" cy="60" r="3" fill="#D8CBB3" opacity="0.8" /> <!-- Torino area -->
              <circle cx="138" cy="78" r="3" fill="#D8CBB3" opacity="0.7" /> <!-- Emilia -->
              <!-- Center -->
              <circle cx="125" cy="120" r="4" fill="#D8CBB3" opacity="0.9" /> <!-- Toscana -->
              <circle cx="138" cy="148" r="4" fill="#D8CBB3" opacity="0.9" /> <!-- Roma area -->
              <circle cx="148" cy="165" r="3" fill="#D8CBB3" opacity="0.8" /> <!-- Lazio -->
              <circle cx="155" cy="188" r="3.5" fill="#D8CBB3" opacity="0.85" /> <!-- Abruzzo - origin -->
              <!-- South -->
              <circle cx="148" cy="220" r="3" fill="#D8CBB3" opacity="0.8" /> <!-- Napoli area -->
              <circle cx="140" cy="250" r="3" fill="#D8CBB3" opacity="0.7" /> <!-- Calabria -->
              <!-- Sardinia dot -->
              <circle cx="33" cy="194" r="3" fill="#D8CBB3" opacity="0.7" />
              <!-- Sicily dot -->
              <circle cx="118" cy="389" r="3" fill="#D8CBB3" opacity="0.7" />

              <!-- Abruzzo highlight (origin) -->
              <circle cx="155" cy="188" r="8" fill="none" stroke="#D8CBB3" stroke-width="1.5" opacity="0.5" />
            </svg>

            <!-- Legend -->
            <div class="flex items-center justify-center gap-5 mt-4">
              <div class="flex items-center gap-2 text-canvas/70 text-xs font-body">
                <div class="w-3 h-3 rounded-full bg-canvas/80"></div>
                Lavorazioni ricevute
              </div>
              <div class="flex items-center gap-2 text-canvas/70 text-xs font-body">
                <div class="w-3 h-3 rounded-full border border-canvas/60 bg-transparent"></div>
                Sede laboratorio
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       SOSTENIBILITÀ
  ===================================================================== -->
  <section class="bg-cream py-20 lg:py-24" aria-labelledby="sostenibilita-heading">
    <div class="container-site">
      <div class="max-w-3xl mx-auto text-center">

        <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3">Il nostro approccio</p>
        <h2 id="sostenibilita-heading" class="section-heading mb-4">Riparare invece di sostituire</h2>
        <p class="font-heading font-semibold text-olive text-xl mb-8">Ogni tenda riparata è una tenda in meno da buttare.</p>

        <div class="space-y-4 text-muted leading-relaxed mb-12 text-left max-w-2xl mx-auto">
          <p>Crediamo nella manutenzione, nella riparazione e nella durata dei materiali nel tempo.</p>
          <p>Molte tende possono continuare a essere utilizzate per anni con la corretta manutenzione.</p>
          <p>Ogni tenda recuperata significa meno sprechi, meno materiale smaltito, più anni di utilizzo e maggiore sostenibilità.</p>
        </div>

        <!-- Badge Powell -->
        <figure class="bg-forest rounded-2xl p-8 text-left max-w-2xl mx-auto">
          <svg class="w-8 h-8 text-canvas/50 mb-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
          </svg>
          <blockquote class="font-heading text-xl text-white leading-relaxed mb-5">
            "Non esiste buono o cattivo tempo, ma solo buono o cattivo equipaggiamento."
          </blockquote>
          <figcaption class="text-canvas/65 text-sm font-body">
            — Robert Baden-Powell
          </figcaption>
        </figure>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       SALEWA
  ===================================================================== -->
  <section class="bg-canvas py-14 lg:py-16" aria-labelledby="salewa-heading">
    <div class="container-site">
      <div class="max-w-2xl mx-auto text-center">
        <h2 id="salewa-heading" class="section-subheading mb-3">
          Riparazioni anche su tende a marchio Salewa
        </h2>
        <p class="text-muted mb-6">
          Effettuiamo lavorazioni anche su tende a marchio Salewa.
        </p>
        <a href="https://www.salewa.com" target="_blank" rel="noopener noreferrer"
          class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-semibold text-sm transition-colors border border-forest/25 hover:border-olive/35 px-5 py-2.5 rounded-full">
          Visita il sito Salewa
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       PRIMA DELLA SPEDIZIONE
  ===================================================================== -->
  <section class="bg-cream py-16 lg:py-20" aria-labelledby="spedizione-prep-heading">
    <div class="container-site">
      <div class="bg-forest/5 border border-forest/15 rounded-2xl p-8 lg:p-12 max-w-4xl mx-auto">

        <div class="flex flex-col lg:flex-row gap-8">
          <div class="w-14 h-14 rounded-xl bg-forest/10 flex items-center justify-center flex-shrink-0">
            <svg class="w-7 h-7 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <h2 id="spedizione-prep-heading" class="section-subheading mb-4">Prima della spedizione</h2>
            <p class="text-muted mb-5 leading-relaxed">
              Per poter effettuare correttamente le lavorazioni, il materiale deve essere pulito, asciutto e lavorabile.
            </p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2">
              <?php
              $rules_pre = [
                'Inviare solo il materiale necessario alla lavorazione',
                'Non inviare picchetti, corde o martelli',
                'Non inviare accessori inutili o sacche non necessarie',
                'Inviare paleria solo se da riparare',
                'Il materiale deve essere pulito e asciutto',
                'Contattarci prima di qualsiasi spedizione',
              ];
              foreach ($rules_pre as $rule) : ?>
                <li class="flex items-start gap-2.5 text-sm text-dark">
                  <svg class="w-4 h-4 text-olive flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <?php echo esc_html($rule); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       FAQ
  ===================================================================== -->
  <section class="bg-canvas py-20 lg:py-24" aria-labelledby="faq-heading">
    <div class="container-site">

      <div class="text-center mb-12">
        <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3">Domande frequenti</p>
        <h2 id="faq-heading" class="section-heading">Hai qualche dubbio?</h2>
      </div>

      <div class="max-w-3xl mx-auto" role="list">
        <?php
        $faqs = [
          [
            'q' => 'Conviene riparare una tenda da campeggio?',
            'a' => 'In molti casi sì. Una corretta manutenzione può allungare notevolmente la vita della tenda evitando sostituzioni costose.',
          ],
          [
            'q' => 'Una tenda con muffa si può recuperare?',
            'a' => 'Dipende dal livello di deterioramento del tessuto. Alcune situazioni sono recuperabili, altre no.',
          ],
          [
            'q' => 'Riparate anche tende igloo?',
            'a' => 'Sì, effettuiamo lavorazioni su tende igloo, trekking e outdoor.',
          ],
          [
            'q' => 'Riparate anche verande roulotte?',
            'a' => 'Sì, interveniamo su zanzariere, finestre, cerniere, cordoli, fascioni, cursori e altre lavorazioni.',
          ],
          [
            'q' => 'Lavorate solo in Abruzzo?',
            'a' => 'No, riceviamo tende da tutta Italia tramite spedizione.',
          ],
          [
            'q' => 'È possibile spedire la tenda?',
            'a' => 'Sì, la maggior parte delle lavorazioni viene gestita tramite spedizione. Prima di spedire è necessario inviare foto e attendere le istruzioni.',
          ],
          [
            'q' => 'Fate pulizia tende?',
            'a' => 'La pulizia non viene proposta come servizio autonomo. Quando necessaria, viene eseguita solo come preparazione del materiale per la lavorazione.',
          ],
        ];

        foreach ($faqs as $i => $faq) : ?>
          <div class="faq-item" data-faq-item role="listitem">
            <button
              data-faq-trigger
              aria-expanded="false"
              aria-controls="faq-answer-<?php echo $i; ?>"
              class="w-full flex items-center justify-between gap-4 py-5 text-left cursor-pointer group bg-transparent border-0">
              <span class="font-heading font-semibold text-forest text-base group-hover:text-olive transition-colors">
                <?php echo esc_html($faq['q']); ?>
              </span>
              <svg data-faq-icon class="w-5 h-5 text-olive flex-shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div id="faq-answer-<?php echo $i; ?>" data-faq-content class="hidden pb-5">
              <p class="text-muted leading-relaxed"><?php echo esc_html($faq['a']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- =====================================================================
       CTA FINALE
  ===================================================================== -->
  <section class="bg-forest py-20 lg:py-24" aria-labelledby="cta-finale-heading">
    <div class="container-site">
      <div class="max-w-2xl mx-auto text-center">

        <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-canvas" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21l9-18 9 18M3 21h18M12 3v18M7 21l5-10 5 10" />
          </svg>
        </div>

        <h2 id="cta-finale-heading" class="font-heading font-bold text-3xl md:text-4xl text-white mb-4">
          Hai una tenda da riparare?
        </h2>
        <p class="text-white/65 text-lg leading-relaxed mb-10">
          Invia foto della tenda e dei danni per ricevere una valutazione preliminare. Gestiamo ogni lavorazione dopo valutazione e spedizione.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="https://wa.me/393000000000?text=Salve%2C%20vorrei%20una%20valutazione%20per%20la%20riparazione%20di%20una%20tenda."
            target="_blank" rel="noopener noreferrer"
            class="btn-whatsapp text-base px-8 py-4 justify-center">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
            Contattaci su WhatsApp
          </a>
          <a href="<?php echo esc_url(home_url('/contatti')); ?>"
            class="btn-outline text-base px-8 py-4 justify-center">
            Oppure scrivi via email
          </a>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>