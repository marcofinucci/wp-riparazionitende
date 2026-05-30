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
        <?php if (has_nav_menu('primary')) : ?>
          <nav class="hidden lg:flex items-center gap-5 xl:gap-6" aria-label="Navigazione principale">
            <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'depth'          => 2,
              'walker'         => new Rtc_Primary_Nav_Walker(),
              'fallback_cb'    => false,
            ]);
            ?>
          </nav>
        <?php endif; ?>

        <!-- WhatsApp CTA (desktop) + Mobile menu button -->
        <div class="flex items-center gap-3">
          <a href="<?php echo esc_url(rtc_whatsapp_link()); ?>" target="_blank" rel="noopener noreferrer"
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
    <?php if (has_nav_menu('primary')) : ?>
      <div id="mobile-menu" class="hidden lg:hidden bg-forest-dark border-t border-forest-light" role="navigation" aria-label="Menu mobile">
        <div class="container-site py-4 space-y-1">
          <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'items_wrap'     => '%3$s',
            'depth'          => 2,
            'walker'         => new Rtc_Mobile_Nav_Walker(),
            'fallback_cb'    => false,
          ]);
          ?>
          <div class="pt-3 pb-1 px-4">
            <a href="<?php echo esc_url(rtc_whatsapp_link()); ?>" target="_blank" rel="noopener noreferrer"
              class="btn-whatsapp w-full justify-center">
              <?php rtc_whatsapp_icon('w-5 h-5'); ?>
              Scrivici su WhatsApp
            </a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </header>

  <!-- Spacer for fixed header -->
  <div class="h-16 lg:h-16" aria-hidden="true"></div>
