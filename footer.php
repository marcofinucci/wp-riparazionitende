<?php
$_rtc_wa          = get_field('whatsapp_number', 'option');
$_rtc_wa_url      = $_rtc_wa['url']   ?? '';
$_rtc_wa_label    = $_rtc_wa['title'] ?? '';
$_rtc_email_link  = get_field('contact_email', 'option');
$_rtc_email_url   = $_rtc_email_link['url']   ?? '';
$_rtc_email_label = $_rtc_email_link['title'] ?? '';
$_rtc_phone_link  = get_field('contact_phone', 'option');
$_rtc_phone_url   = $_rtc_phone_link['url']   ?? '';
$_rtc_phone_label = $_rtc_phone_link['title'] ?? '';
?>
<!-- Fixed WhatsApp Button — solo mobile (stessa soglia del burger menu: lg:hidden) -->
<?php if ($_rtc_wa_url) : ?>
  <a href="<?php echo esc_url($_rtc_wa_url); ?>"
    target="<?php echo esc_attr($_rtc_wa['target'] ?? '_blank'); ?>" rel="noopener noreferrer"
    aria-label="Contattaci su WhatsApp"
    class="border border-white lg:hidden fixed bottom-2 right-2 z-50 w-12 h-12 bg-[#4FCE5D] hover:bg-[#45b953] rounded-full shadow-lg flex items-center justify-center transition-all duration-200">
    <?php rtc_whatsapp_icon('w-6 h-6 text-white'); ?>
  </a>
<?php endif; ?>

<!-- Footer -->
<footer class="bg-forest text-white">

  <!-- Footer Main -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Brand -->
      <div class="lg:col-span-1">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 mb-4 group">
          <div class="w-10 h-10 text-canvas flex-shrink-0">
            <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M18 3L2 30h32L18 3z" fill="currentColor" opacity="0.9" />
              <path d="M18 3L8 30h20L18 3z" fill="currentColor" opacity="0.45" />
              <path d="M18 14v16" stroke="#2F4F3A" stroke-width="1.5" />
            </svg>
          </div>
          <div>
            <span class="block font-heading font-bold text-white type-base">Riparazioni Tende</span>
            <span class="block font-heading text-canvas/70 type-xs">Campeggio</span>
          </div>
        </a>
        <p class="text-white/65 type-sm mb-5">
          Laboratorio artigianale specializzato nella manutenzione e riparazione di tende scout, verande roulotte, tende carrello e attrezzatura outdoor.
        </p>
        <div class="flex flex-col gap-2.5">
          <?php if ($_rtc_wa_url) : ?>
            <a href="<?php echo esc_url($_rtc_wa_url); ?>"
              target="<?php echo esc_attr($_rtc_wa['target'] ?? '_blank'); ?>" rel="noopener noreferrer"
              class="inline-flex items-center gap-2 text-canvas hover:text-white type-sm transition-colors">
              <?php rtc_whatsapp_icon('w-4 h-4 text-canvas/70'); ?>
              <?php echo esc_html($_rtc_wa_label ?: 'WhatsApp'); ?>
            </a>
          <?php endif; ?>
          <?php if ($_rtc_email_url) : ?>
            <a href="<?php echo esc_url($_rtc_email_url); ?>"
              class="inline-flex items-center gap-2 text-canvas hover:text-white type-sm transition-colors">
              <?php rtc_icon('mail', 'w-4 h-4 text-canvas/70'); ?>
              <?php echo esc_html($_rtc_email_label); ?>
            </a>
          <?php endif; ?>
          <?php if ($_rtc_phone_url) : ?>
            <a href="<?php echo esc_url($_rtc_phone_url); ?>"
              class="inline-flex items-center gap-2 text-canvas hover:text-white type-sm transition-colors">
              <?php rtc_icon('phone', 'w-4 h-4 text-canvas/70'); ?>
              <?php echo esc_html($_rtc_phone_label); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Servizi -->
      <?php if (has_nav_menu('footer_services')) : ?>
        <div>
          <h3 class="font-heading font-semibold text-canvas type-sm uppercase tracking-wider mb-4">Servizi</h3>
          <?php
          wp_nav_menu([
            'theme_location' => 'footer_services',
            'container'      => false,
            'menu_class'     => 'space-y-2.5',
            'depth'          => 1,
            'walker'         => new Rtc_Footer_Nav_Walker(),
            'fallback_cb'    => false,
          ]);
          ?>
        </div>
      <?php endif; ?>

      <!-- Utili -->
      <?php if (has_nav_menu('footer_info')) : ?>
        <div>
          <h3 class="font-heading font-semibold text-canvas type-sm uppercase tracking-wider mb-4">Informazioni</h3>
          <?php
          wp_nav_menu([
            'theme_location' => 'footer_info',
            'container'      => false,
            'menu_class'     => 'space-y-2.5',
            'depth'          => 1,
            'walker'         => new Rtc_Footer_Nav_Walker(),
            'fallback_cb'    => false,
          ]);
          ?>
        </div>
      <?php endif; ?>

      <!-- Come funziona (summary) -->
      <div>
        <h3 class="font-heading font-semibold text-canvas type-sm uppercase tracking-wider mb-4">Come funziona</h3>
        <ol class="space-y-3">
          <?php
          $steps = [
            'Invia foto della tenda',
            'Compila la scheda cliente',
            'Ricevi la valutazione',
            'Spedisci il materiale',
            'Ritira la tenda riparata',
          ];
          foreach ($steps as $i => $step) : ?>
            <li class="flex items-start gap-2.5 text-white/65 type-sm">
              <span class="w-5 h-5 rounded-full bg-forest-light text-white type-xs font-heading font-bold flex items-center justify-center flex-shrink-0 mt-0.5">
                <?php echo $i + 1; ?>
              </span>
              <?php echo esc_html($step); ?>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="border-t border-forest-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-white/45 type-xs">
        &copy; <?php echo date('Y'); ?> Riparazioni Tende Campeggio. Tutti i diritti riservati.
      </p>
      <nav aria-label="Link legali" class="flex items-center gap-4 flex-wrap justify-center">
        <?php if (has_nav_menu('footer_legal')) : ?>
          <?php
          wp_nav_menu([
            'theme_location' => 'footer_legal',
            'container'      => false,
            'menu_class'     => 'flex items-center gap-4 flex-wrap justify-center',
            'depth'          => 1,
            'walker'         => new Rtc_Footer_Nav_Walker(),
            'link_class'     => 'text-white/45 hover:text-white/70 type-xs transition-colors',
            'fallback_cb'    => false,
          ]);
          ?>
        <?php endif; ?>
      </nav>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>