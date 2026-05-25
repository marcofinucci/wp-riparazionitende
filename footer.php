<!-- Fixed WhatsApp Button — solo mobile (stessa soglia del burger menu: lg:hidden) -->
<a href="https://wa.me/393000000000?text=Salve%2C%20vorrei%20una%20valutazione%20per%20la%20riparazione%20di%20una%20tenda."
  target="_blank" rel="noopener noreferrer"
  aria-label="Contattaci su WhatsApp"
  class="border border-white lg:hidden fixed bottom-2 right-2 z-50 w-12 h-12 bg-[#4FCE5D] hover:bg-[#45b953] rounded-full shadow-lg flex items-center justify-center transition-all duration-200">
  <?php rtc_whatsapp_icon('w-6 h-6 text-white'); ?>
</a>

<!-- Footer -->
<footer class="bg-forest text-white">

  <!-- Footer Main -->
  <div class="container-site py-14 lg:py-16">
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
            <span class="block font-heading font-bold text-white text-base">Riparazioni Tende</span>
            <span class="block font-heading text-canvas/70 text-xs">Campeggio</span>
          </div>
        </a>
        <p class="text-white/65 text-sm leading-relaxed mb-5">
          Laboratorio artigianale specializzato nella manutenzione e riparazione di tende scout, verande roulotte, tende carrello e attrezzatura outdoor.
        </p>
        <div class="flex flex-col gap-2.5">
          <a href="https://wa.me/393000000000" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-2 text-canvas hover:text-white text-sm transition-colors">
            <?php rtc_whatsapp_icon('w-4 h-4 text-canvas/70'); ?>
            WhatsApp
          </a>
          <a href="mailto:info@riparazionitendecampeggio.it"
            class="inline-flex items-center gap-2 text-canvas hover:text-white text-sm transition-colors">
            <?php rtc_icon('mail', 'w-4 h-4 text-canvas/70'); ?>
            info@riparazionitendecampeggio.it
          </a>
          <a href="<?php echo esc_url(rtc_phone_link(rtc_contact_phone())); ?>"
            class="inline-flex items-center gap-2 text-canvas hover:text-white text-sm transition-colors">
            <?php rtc_icon('phone', 'w-4 h-4 text-canvas/70'); ?>
            <?php echo esc_html(rtc_contact_phone()); ?>
          </a>
        </div>
      </div>

      <!-- Servizi -->
      <div>
        <h3 class="font-heading font-semibold text-canvas text-sm uppercase tracking-wider mb-4">Servizi</h3>
        <ul class="space-y-2.5">
          <?php
          $footer_services = [
            ['/riparazione-tende-scout',              'Gruppi Scout'],
            ['/riparazione-verande-roulotte',          'Verande roulotte'],
            ['/manutenzione-tende-carrello',           'Tende carrello e stagionali'],
            ['/riparazione-tende-trekking-igloo',      'Trekking / Igloo / Outdoor'],
            ['/riparazione-paleria-tende',             'Paleria e ricambi'],
            ['/riparazione-tende-speciali',            'Tende speciali'],
            ['/riparazione-tende-associazioni-eventi', 'Associazioni e strutture'],
          ];
          foreach ($footer_services as [$url, $label]) : ?>
            <li>
              <a href="<?php echo esc_url(home_url($url)); ?>"
                class="text-white/65 hover:text-canvas text-sm transition-colors">
                <?php echo esc_html($label); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Utili -->
      <div>
        <h3 class="font-heading font-semibold text-canvas text-sm uppercase tracking-wider mb-4">Informazioni</h3>
        <ul class="space-y-2.5">
          <?php
          $footer_info = [
            ['/come-spedire-tenda-da-riparare',  'Come spedire'],
            ['/collaborazioni-punti-raccolta',    'Collaborazioni'],
            ['/condizioni-lavorazione-tende',     'Condizioni di lavorazione'],
            ['/garanzia-riparazioni-tende',       'Garanzia'],
            ['/contatti',                         'Contatti'],
          ];
          foreach ($footer_info as [$url, $label]) : ?>
            <li>
              <a href="<?php echo esc_url(home_url($url)); ?>"
                class="text-white/65 hover:text-canvas text-sm transition-colors">
                <?php echo esc_html($label); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Come funziona (summary) -->
      <div>
        <h3 class="font-heading font-semibold text-canvas text-sm uppercase tracking-wider mb-4">Come funziona</h3>
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
            <li class="flex items-start gap-2.5 text-white/65 text-sm">
              <span class="w-5 h-5 rounded-full bg-forest-light text-white text-xs font-heading font-bold flex items-center justify-center flex-shrink-0 mt-0.5">
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
    <div class="container-site py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-white/45 text-xs">
        &copy; <?php echo date('Y'); ?> Riparazioni Tende Campeggio. Tutti i diritti riservati.
      </p>
      <nav aria-label="Link legali" class="flex items-center gap-4 flex-wrap justify-center">
        <?php
        $legal = [
          ['/privacy-policy', 'Privacy'],
          ['/cookie-policy',  'Cookie'],
        ];
        foreach ($legal as [$url, $label]) : ?>
          <a href="<?php echo esc_url(home_url($url)); ?>"
            class="text-white/45 hover:text-white/70 text-xs transition-colors">
            <?php echo esc_html($label); ?>
          </a>
        <?php endforeach; ?>
      </nav>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>