<?php

/**
 * Template: Homepage
 */
defined('ABSPATH') || exit;
get_header();
?>

<main id="main">

  <!-- HERO -->
  <section class="relative overflow-hidden bg-forest" aria-label="Hero">

    <!-- Background image -->
    <img
      src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?auto=format&fit=crop&w=1920&h=1080&q=85"
      alt=""
      aria-hidden="true"
      class="absolute inset-0 w-full h-full object-cover object-bottom"
      loading="eager"
      fetchpriority="high">

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-forest/80" aria-hidden="true"></div>

    <!-- Vignette laterale per profondità -->
    <div class="absolute inset-0" aria-hidden="true"
      style="background: radial-gradient(ellipse at center, transparent 40%, rgba(0,0,0,0.80) 100%);">
    </div>

    <!-- Gradiente bottom -->
    <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-forest-dark/80 to-transparent" aria-hidden="true"></div>

    <div class="container-site relative z-10 py-16 lg:py-20">
      <div class="max-w-3xl">
        <div class="inline-flex items-center gap-2 text-canvas text-xs font-heading font-semibold uppercase tracking-widest mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-canvas animate-pulse" aria-hidden="true"></span>
          Laboratorio artigianale specializzato
        </div>

        <h1 class="font-heading text-balance font-bold text-4xl md:text-5xl lg:text-6xl text-white !leading-tight mb-6">
          Riparazione Tende
          da Campeggio
          in tutta Italia
        </h1>

        <p class="text-white text-lg md:text-xl leading-relaxed mb-10 max-w-2xl">
          Laboratorio artigianale specializzato nella manutenzione e riparazione di tende scout, verande roulotte, tende carrello, tende igloo, paleria e tende tecniche outdoor.
          Riceviamo materiali da tutta Italia tramite spedizione.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
          <a href="<?php echo esc_url(home_url('/contatti')); ?>"
            class="btn-secondary">
            Richiedi una valutazione
          </a>
          <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
            class="btn-outline">
            Scopri come spedire
            <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- TRUST BAR / STAT COUNTER -->
  <section class="bg-olive" aria-label="Numeri chiave">
    <div class="container-site py-8 lg:py-10">
      <div class="grid grid-cols-1 sm:grid-cols-3 divide-y sm:divide-y-0 sm:divide-x divide-white/20">

        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <span class="font-heading font-bold text-3xl text-white">Dal 1990</span>
          <span class="text-white mt-1 font-body">Esperienza nel settore</span>
        </div>

        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <span class="font-heading font-bold text-3xl text-white">Migliaia</span>
          <span class="text-white mt-1 font-body">di tende riparate dal 2004</span>
        </div>

        <div class="flex flex-col items-center text-center py-5 sm:py-0 sm:px-8">
          <span class="font-heading font-bold text-3xl text-white">Tutta Italia</span>
          <span class="text-white mt-1 font-body">Lavorazioni tramite spedizione</span>
        </div>

      </div>
    </div>
  </section>

  <!-- SERVIZI -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="servizi-heading">
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
            'img'   => 'https://images.unsplash.com/photo-1478131143081-80f7f84ca84d?auto=format&fit=crop&w=800&h=480&q=80',
            'img_alt' => 'Tende scout canadesi in un bosco',
            'badge' => 'Servizio principale',
          ],
          [
            'url'   => '/riparazione-verande-roulotte',
            'title' => 'Riparazione verande roulotte',
            'desc'  => 'Lavorazioni su verande utilizzate in campeggi stagionali: zanzariere, finestre, cerniere, cursori, cordoli, guide, fascioni perimetrali e cucinotti.',
            'img'   => 'https://images.unsplash.com/photo-1697964455724-ef772d1fe39e?auto=format&fit=crop&w=800&h=480&q=80',
            'img_alt' => 'Camper con veranda estesa e tendalino',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-tende-carrello',
            'title' => 'Riparazione tende carrello e stagionali',
            'desc'  => 'Le tende carrello e le strutture stagionali in cotone richiedono manutenzione periodica per mantenere durata, impermeabilità e funzionalità.',
            'img'   => 'https://images.unsplash.com/photo-1510312305653-8ed496efae75?auto=format&fit=crop&w=800&h=480&q=80',
            'img_alt' => 'Tenda carrello in un campo verde',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-tende-trekking-igloo',
            'title' => 'Riparazione tende trekking, igloo e outdoor',
            'desc'  => 'Riparazioni su tende trekking, igloo e outdoor: stecche rotte, paleria piegata, cerniere rotte, strappi, finestrelle scollate e zanzariere danneggiate.',
            'img'   => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&h=480&q=80',
            'img_alt' => 'Tenda igloo in paesaggio montano al tramonto',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-paleria-tende',
            'title' => 'Riparazione paleria e stecche',
            'desc'  => 'Ripariamo e sostituiamo paleria per tende igloo, trekking e campeggio: stecche in vetroresina, alluminio, elastici interni, segmenti e punte paleria.',
            'img'   => 'https://images.unsplash.com/photo-1571863533956-01c88e79957e?auto=format&fit=crop&w=800&h=480&q=80',
            'img_alt' => 'Dettaglio paleria e stecche di una tenda da campeggio',
            'badge' => null,
          ],
          [
            'url'   => '/riparazione-tende-speciali',
            'title' => 'Tende speciali e outdoor',
            'desc'  => 'Valutiamo interventi su tende da tetto auto, carpfishing, tarp bushcraft, glamping, tende a campana, yurta, tepee e tende medievali.',
            'img'   => 'https://images.unsplash.com/photo-1563299796-17596ed6b017?auto=format&fit=crop&w=800&h=480&q=80',
            'img_alt' => 'Tenda a campana glamping nella natura',
            'badge' => null,
          ],
        ];

        foreach ($services_home as $service) : ?>
          <article class="service-card-media group relative cursor-pointer">
            <a href="<?php echo esc_url(home_url($service['url'])); ?>" class="absolute inset-0 z-10" aria-label="<?php echo esc_attr($service['title']); ?>"></a>
            <div class="relative h-48 overflow-hidden rounded-t-2xl">
              <img
                src="<?php echo esc_url($service['img']); ?>"
                alt="<?php echo esc_attr($service['img_alt']); ?>"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy">
              <?php if ($service['badge']) : ?>
                <span class="absolute top-3 right-3 text-xs font-heading font-semibold text-forest bg-white/90 backdrop-blur-sm px-2.5 py-1 rounded-full">
                  <?php echo esc_html($service['badge']); ?>
                </span>
              <?php endif; ?>
            </div>
            <div class="p-6 flex flex-col gap-4 flex-1">
              <div class="flex-1">
                <h3 class="font-heading font-semibold text-forest text-lg leading-snug mb-2">
                  <?php echo esc_html($service['title']); ?>
                </h3>
                <p class="text-muted text-sm leading-relaxed">
                  <?php echo esc_html($service['desc']); ?>
                </p>
              </div>
              <span class="inline-flex items-center gap-1.5 text-olive text-sm font-heading font-semibold group-hover:gap-2.5 transition-all mt-auto">
                Scopri di più
                <?php rtc_icon('chevron-right', 'w-4 h-4 transition-transform group-hover:translate-x-0.5'); ?>
              </span>
            </div>
          </article>
        <?php endforeach; ?>

      </div>

      <!-- Associazioni link -->
      <div class="mt-8 text-center">
        <a href="<?php echo esc_url(home_url('/riparazione-tende-associazioni-eventi')); ?>"
          class="inline-flex items-center gap-2 text-forest font-heading font-medium text-sm border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg px-5 py-2.5 rounded-full transition-all duration-300">
          <?php rtc_icon('users', 'w-4 h-4'); ?>
          Anche per Associazioni e strutture (Protezione Civile, Pro Loco, Croce Rossa…)
        </a>
      </div>
    </div>
  </section>

  <!-- AUTOREVOLEZZA -->
  <section class="bg-canvas py-14 lg:py-16" aria-labelledby="autorevolezza-heading">
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
                <?php rtc_icon('clock', 'w-7 h-7 text-forest'); ?>
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
                <?php rtc_icon('badge-check', 'w-7 h-7 text-olive'); ?>
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
                <?php rtc_icon('map', 'w-7 h-7 text-forest'); ?>
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

  <!-- COME FUNZIONA -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="come-funziona-heading">
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
          <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
        </a>
      </div>

    </div>
  </section>

  <!-- MAPPA ITALIA -->
  <section class="bg-forest py-14 lg:py-16" aria-labelledby="mappa-heading">
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

  <!-- SOSTENIBILITÀ -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="sostenibilita-heading">
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
          <?php rtc_icon('quote', 'w-8 h-8 text-canvas/50 mb-4'); ?>
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

  <!-- SALEWA -->
  <section class="bg-canvas py-12 lg:py-14" aria-labelledby="salewa-heading">
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
          <?php rtc_icon('external-link', 'w-4 h-4'); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- PRIMA DELLA SPEDIZIONE -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="spedizione-prep-heading">
    <div class="container-site">
      <div class="bg-forest/5 border border-forest/15 rounded-2xl p-8 lg:p-12 max-w-4xl mx-auto">

        <div class="flex flex-col lg:flex-row gap-8">
          <div class="w-14 h-14 rounded-xl bg-forest/10 flex items-center justify-center flex-shrink-0">
            <?php rtc_icon('info', 'w-7 h-7 text-forest'); ?>
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
                  <?php rtc_icon('check', 'w-4 h-4 text-olive flex-shrink-0 mt-0.5'); ?>
                  <?php echo esc_html($rule); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-canvas py-14 lg:py-16" aria-labelledby="faq-heading">
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
              <?php rtc_icon('chevron-down', 'w-5 h-5 text-olive flex-shrink-0 transition-transform duration-200', ['data-faq-icon' => '']); ?>
            </button>
            <div id="faq-answer-<?php echo $i; ?>" data-faq-content class="hidden pb-5">
              <p class="text-muted leading-relaxed"><?php echo esc_html($faq['a']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- CTA FINALE -->
  <section class="bg-forest py-16 lg:py-20" aria-labelledby="cta-finale-heading">
    <div class="container-site">
      <div class="max-w-2xl mx-auto text-center">

        <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-6">
          <?php rtc_icon('tent', 'w-8 h-8 text-canvas'); ?>
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
            class="btn-whatsapp">
            <?php rtc_whatsapp_icon('w-5 h-5'); ?>
            Contattaci su WhatsApp
          </a>
          <a href=" <?php echo esc_url(home_url('/contatti')); ?>"
            class="btn-outline">
            Oppure scrivi via email
          </a>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>