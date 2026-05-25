<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>

  <?php
  // Tailwind CDN per sviluppo (rimuovere in produzione dopo aver compilato con npm run build)
  $compiled = get_template_directory() . '/assets/css/app.css';
  if (!file_exists($compiled) || filesize($compiled) < 100) : ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              forest: {
                DEFAULT: '#2F4F3A',
                light: '#3D6B4F',
                dark: '#1F3828'
              },
              olive: {
                DEFAULT: '#556B2F',
                light: '#6B8540',
                dark: '#3F5020'
              },
              canvas: {
                DEFAULT: '#D8CBB3',
                light: '#EAE0CF',
                dark: '#C4B59D'
              },
              cream: {
                DEFAULT: '#F5F2EA',
                dark: '#EBE5D8'
              },
              dark: '#2B2B2B',
              muted: '#4B4B4B',
            },
            fontFamily: {
              heading: ['Poppins', 'sans-serif'],
              body: ['Open Sans', 'sans-serif'],
            },
          },
        },
      };
    </script>
    <style type="text/tailwindcss">
      @layer base {
      body { font-family: 'Open Sans', sans-serif; color: #2B2B2B; background-color: #F5F2EA; }
      h1,h2,h3,h4,h5,h6 { font-family: 'Poppins', sans-serif; }
    }
    @layer components {
      .btn-primary    { @apply inline-flex items-center gap-2 bg-forest hover:bg-forest-light text-white font-heading font-semibold px-6 py-3 rounded-full transition-colors duration-200 cursor-pointer; }
      .btn-secondary  { @apply inline-flex items-center gap-2 bg-olive hover:bg-olive-light text-white font-heading font-semibold px-6 py-3 rounded-full transition-colors duration-200 cursor-pointer; }
      .btn-outline    { @apply inline-flex items-center gap-2 border-2 border-white text-white hover:bg-white hover:text-forest font-heading font-semibold px-6 py-3 rounded-full transition-colors duration-200 cursor-pointer; }
      .btn-whatsapp   { @apply inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1dba57] text-white font-heading font-semibold px-6 py-3 rounded-full transition-colors duration-200 cursor-pointer shadow-lg; }
      .section-heading    { @apply font-heading font-bold text-3xl md:text-4xl text-forest leading-tight; }
      .section-subheading { @apply font-heading font-semibold text-xl md:text-2xl text-forest; }
      .service-card   { @apply bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4; }
      .container-site { @apply max-w-7xl mx-auto px-4 sm:px-6 lg:px-8; }
      .nav-link       { @apply text-white/85 hover:text-canvas text-sm font-heading font-medium transition-colors duration-150; }
      .faq-item       { @apply border-b border-canvas-dark last:border-0; }
      .step-number    { @apply w-10 h-10 rounded-full bg-forest text-white font-heading font-bold text-lg flex items-center justify-center flex-shrink-0; }
    }
  </style>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap">
    </noscript>
  <?php endif; ?>
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
          <div class="leading-tight font-semibold text-white text-sm uppercase">
            <span class="block group-hover:text-canvas transition-colors">Riparazioni Tende</span>
            <span class="block text-canvas/80  group-hover:text-canvas transition-colors">Campeggio</span>
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
              <svg class="w-4 h-4 transition-transform duration-150" id="services-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
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
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-dark hover:bg-cream hover:text-forest font-body text-sm font-medium transition-colors group">
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
            class="hidden sm:inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1dba57] text-white text-sm font-heading font-semibold px-4 py-2 rounded-full transition-colors duration-200 shadow-sm">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
            WhatsApp
          </a>

          <!-- Mobile hamburger -->
          <button id="mobile-menu-btn" aria-label="Apri menu" aria-expanded="false" aria-controls="mobile-menu"
            class="lg:hidden text-white p-2 rounded-lg hover:bg-forest-light transition-colors">
            <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
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
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
            Scrivici su WhatsApp
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- Spacer for fixed header -->
  <div class="h-16 lg:h-16" aria-hidden="true"></div>