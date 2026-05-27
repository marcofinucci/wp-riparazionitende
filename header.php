<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>

  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap">
  </noscript>
</head>

<body <?php body_class('font-body text-dark bg-cream antialiased'); ?>>
  <?php wp_body_open(); ?>

  <!-- Site Header -->
  <header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-forest-dark">
    <div class="container-site">
      <div class="flex items-center justify-between h-16 lg:h-18">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group" aria-label="Riparazioni Tende Campeggio - Home">
          <div class="w-16 flex items-center justify-center flex-shrink-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/riparazionitendecampeggio-logotipo.svg" alt="Riparazioni Tende Campeggio">
          </div>
          <div class="font-semibold text-white text-sm uppercase group-hover:text-canvas transition-colors">
            <div>Riparazioni Tende</div>
            <div>Campeggio</div>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-5 xl:gap-6" aria-label="Navigazione principale">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Home</a>

          <!-- Servizi dropdown -->
          <div class="relative" id="services-parent">
            <button id="services-btn" aria-haspopup="true" aria-expanded="false"
              class="nav-link flex items-center gap-1 bg-transparent border-0 p-0 cursor-pointer">
              Servizi
              <?php rtc_icon('chevron-down', 'w-4 h-4 transition-transform duration-150', ['id' => 'services-chevron']); ?>
            </button>
            <div id="services-dropdown"
              class="hidden absolute top-full left-1/2 -translate-x-1/2 pt-3 w-72 z-50">
              <div class="bg-white rounded-2xl shadow-xl border border-canvas p-2">
                <?php
                $services = [
                  ['url' => '/riparazione-tende-scout',              'label' => 'Gruppi Scout'],
                  ['url' => '/riparazione-verande-roulotte',          'label' => 'Verande roulotte'],
                  ['url' => '/manutenzione-tende-carrello',           'label' => 'Tende carrello e stagionali'],
                  ['url' => '/riparazione-tende-trekking-igloo',      'label' => 'Trekking / Igloo / Outdoor'],
                  ['url' => '/riparazione-paleria-tende',             'label' => 'Paleria e ricambi'],
                  ['url' => '/riparazione-tende-speciali',            'label' => 'Tende speciali'],
                  ['url' => '/riparazione-tende-associazioni-eventi', 'label' => 'Associazioni e strutture'],
                ];
                foreach ($services as $s) : ?>
                  <a href="<?php echo esc_url(home_url($s['url'])); ?>"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-dark hover:text-forest font-body text-sm font-medium transition-colors group">
                    <?php echo esc_html($s['label']); ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>" class="nav-link">Come spedire</a>
          <a href="<?php echo esc_url(home_url('/collaborazioni-punti-raccolta')); ?>" class="nav-link">Collaborazioni</a>
          <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="nav-link">Contatti</a>
        </nav>

        <!-- WhatsApp CTA (desktop) + Mobile menu button -->
        <div class="flex items-center gap-3">
          <a href="https://wa.me/393000000000" target="_blank" rel="noopener noreferrer"
            class="hidden sm:inline-flex btn-outline-sm">
            <?php rtc_whatsapp_icon('w-4 h-4'); ?>
            WhatsApp
          </a>

          <!-- Mobile hamburger -->
          <button id="mobile-menu-btn" aria-label="Apri menu" aria-expanded="false" aria-controls="mobile-menu"
            class="lg:hidden text-white p-2 rounded-lg hover:bg-forest-light transition-colors">
            <?php rtc_icon('menu', 'w-6 h-6', ['id' => 'menu-icon-open']); ?>
            <?php rtc_icon('x', 'w-6 h-6 hidden', ['id' => 'menu-icon-close']); ?>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-forest-dark border-t border-forest-light" role="navigation" aria-label="Menu mobile">
      <div class="container-site py-4 space-y-1">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block px-4 py-3 text-white/90 hover:text-white hover:bg-forest-light rounded-xl text-sm font-heading font-medium transition-colors">Home</a>
        <div class="px-4 py-2">
          <p class="text-canvas/60 text-xs font-heading font-semibold uppercase tracking-wider mb-2">Servizi</p>
          <?php foreach ($services as $s) : ?>
            <a href="<?php echo esc_url(home_url($s['url'])); ?>"
              class="block px-3 py-2 text-white/80 hover:text-white hover:bg-forest-light rounded-lg text-sm font-body transition-colors">
              <?php echo esc_html($s['label']); ?>
            </a>
          <?php endforeach; ?>
        </div>
        <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>" class="block px-4 py-3 text-white/90 hover:text-white hover:bg-forest-light rounded-xl text-sm font-heading font-medium transition-colors">Come spedire</a>
        <a href="<?php echo esc_url(home_url('/collaborazioni-punti-raccolta')); ?>" class="block px-4 py-3 text-white/90 hover:text-white hover:bg-forest-light rounded-xl text-sm font-heading font-medium transition-colors">Collaborazioni</a>
        <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="block px-4 py-3 text-white/90 hover:text-white hover:bg-forest-light rounded-xl text-sm font-heading font-medium transition-colors">Contatti</a>
        <div class="pt-3 pb-1 px-4">
          <a href="https://wa.me/393000000000" target="_blank" rel="noopener noreferrer"
            class="btn-whatsapp w-full justify-center">
            <?php rtc_whatsapp_icon('w-5 h-5'); ?>
            Scrivici su WhatsApp
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- Spacer for fixed header -->
  <div class="h-16 lg:h-16" aria-hidden="true"></div>