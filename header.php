<?php
$_rtc_wa     = get_field('whatsapp_number', 'option');
$_rtc_wa_url = $_rtc_wa['url'] ?? '';
$_header_brand_line_1 = get_field('header_brand_line_1', 'option') ?: 'Riparazioni Tende';
$_header_brand_line_2 = get_field('header_brand_line_2', 'option') ?: 'Campeggio';
$_header_wa_label     = get_field('header_whatsapp_label', 'option') ?: 'WhatsApp';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>

  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap">
  </noscript>
</head>

<body <?php body_class('font-body text-dark bg-cream antialiased'); ?>>
  <?php wp_body_open(); ?>

  <!-- Site Header -->
  <header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-forest-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16 lg:h-18">
        <!-- Logo -->
        <div class="flex items-center gap-2 group">
          <?php if (has_custom_logo()) : ?>
            <div class="h-9 lg:h-10 flex items-center justify-center flex-shrink-0 [&_a]:h-full [&_img]:h-full [&_img]:w-auto">
              <?php the_custom_logo(); ?>
            </div>
          <?php endif; ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="font-heading font-semibold text-white type-sm uppercase group-hover:text-canvas transition-colors flex flex-col !leading-none gap-1 tracking-wide" aria-label="<?php echo esc_attr(trim($_header_brand_line_1 . ' ' . $_header_brand_line_2) . ' - Home'); ?>">
            <div><?php echo esc_html($_header_brand_line_1); ?></div>
            <div><?php echo esc_html($_header_brand_line_2); ?></div>
          </a>
        </div>

        <!-- Desktop Navigation -->
        <?php if (has_nav_menu('primary')) : ?>
          <nav class="hidden lg:flex items-center gap-6" aria-label="Navigazione principale">
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
          <?php if ($_rtc_wa_url) : ?>
            <a href="<?php echo $_rtc_wa_url; ?>" target="_blank" rel="noopener noreferrer"
              class="hidden sm:inline-flex btn-outline-white-sm">
              <?php rtc_whatsapp_icon('w-4 h-4'); ?>
              <?php echo esc_html($_header_wa_label); ?>
            </a>
          <?php endif; ?>

          <!-- Mobile hamburger -->
          <button id="mobile-menu-btn" aria-label="Apri menu" aria-expanded="false" aria-controls="mobile-menu"
            class="lg:hidden text-white p-2 rounded-lg hover:bg-forest-light transition-colors">
            <?php rtc_icon('menu', 'w-6 h-6', ['id' => 'menu-icon-open']); ?>
            <?php rtc_icon('x', 'w-6 h-6 hidden', ['id' => 'menu-icon-close']); ?>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <?php if (has_nav_menu('primary')) : ?>
      <div id="mobile-menu"
        class="hidden lg:hidden fixed inset-0 top-16 z-40 bg-forest-dark overflow-y-auto"
        role="navigation"
        aria-label="Menu mobile">
        <div class="mobile-menu-inner relative flex flex-col min-h-full max-w-7xl mx-auto px-4 sm:px-6 py-8 pb-10">
          <nav class="flex-1 space-y-1">
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
          </nav>
          <?php if ($_rtc_wa_url) : ?>
            <div class="mt-10 pt-8 border-t border-white/10">
              <a href="<?php echo $_rtc_wa_url; ?>" target="_blank" rel="noopener noreferrer"
                class="btn-primary w-full justify-center">
                <?php rtc_whatsapp_icon('w-5 h-5'); ?>
                <?php echo esc_html($_header_wa_label); ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
  </header>

  <!-- Spacer for fixed header -->
  <div class="h-16 lg:h-16" aria-hidden="true"></div>