<?php
defined('ABSPATH') || exit;

$wa_message = 'Salve, vorrei una valutazione per la riparazione di una tenda.';
$wa_url     = rtc_whatsapp_link($wa_message);
$email      = rtc_contact_email();
$phone      = rtc_contact_phone();
?>

<section class="bg-cream py-14 lg:py-16" aria-labelledby="canali-heading">
  <div class="container-site">
    <h2 id="canali-heading" class="section-subheading mb-8">Contattaci</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <a href="<?php echo esc_url($wa_url); ?>" target="_blank" rel="noopener noreferrer" class="service-card group cursor-pointer">
        <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
          <?php rtc_whatsapp_icon('w-6 h-6 text-forest'); ?>
        </div>
        <div>
          <h3 class="font-heading font-semibold text-forest text-lg mb-1">WhatsApp</h3>
          <p class="text-muted text-sm leading-relaxed mb-3">Canale preferito per foto, preventivi e aggiornamenti sulle lavorazioni.</p>
          <span class="inline-flex items-center gap-1.5 text-forest group-hover:text-olive font-heading font-medium text-sm transition-colors">
            Scrivici ora
            <?php rtc_icon('chevron-right', 'w-4 h-4 group-hover:translate-x-0.5 transition-transform'); ?>
          </span>
        </div>
      </a>

      <a href="<?php echo esc_url('mailto:' . $email); ?>" class="service-card group cursor-pointer">
        <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
          <?php rtc_icon('mail', 'w-6 h-6 text-forest'); ?>
        </div>
        <div>
          <h3 class="font-heading font-semibold text-forest text-lg mb-1">Email</h3>
          <p class="text-muted text-sm leading-relaxed mb-3">Per schede cliente, documentazione e comunicazioni formali.</p>
          <span class="text-forest group-hover:text-olive font-heading font-medium text-sm transition-colors break-all"><?php echo esc_html($email); ?></span>
        </div>
      </a>

      <a href="<?php echo esc_url(rtc_phone_link($phone)); ?>" class="service-card group cursor-pointer">
        <div class="w-12 h-12 rounded-xl bg-olive/10 flex items-center justify-center">
          <?php rtc_icon('phone', 'w-6 h-6 text-olive'); ?>
        </div>
        <div>
          <h3 class="font-heading font-semibold text-forest text-lg mb-1">Telefono</h3>
          <p class="text-muted text-sm leading-relaxed mb-3">Per informazioni rapide negli orari di apertura del laboratorio.</p>
          <span class="text-forest group-hover:text-olive font-heading font-medium text-sm transition-colors"><?php echo esc_html($phone); ?></span>
        </div>
      </a>
    </div>

    <div class="mt-8 bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4 max-w-3xl">
      <?php rtc_icon('clock', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
      <div>
        <h3 class="font-heading font-semibold text-forest text-base mb-1">Tempi di risposta</h3>
        <p class="text-muted text-sm leading-relaxed">
          Rispondiamo di norma entro <strong class="text-dark font-medium">1–2 giorni lavorativi</strong>.
          In periodi di alta richiesta i tempi possono allungarsi: ti aggiorniamo appena possibile.
        </p>
      </div>
    </div>
  </div>
</section>
