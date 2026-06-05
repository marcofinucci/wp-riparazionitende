<?php
defined('ABSPATH') || exit;

$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
$email_link = $args['email_link'] ?? [];
$phone_link = $args['phone_link'] ?? [];
$wa_link    = $args['wa_link']    ?? [];
?>

<section class="block-contact-canali <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 id="canali-heading" class="font-heading font-semibold type-xl text-forest mb-8">Contattaci</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php if (!empty($wa_link['url'])) : ?>
        <a href="<?php echo esc_url($wa_link['url']); ?>"
          target="<?php echo esc_attr($wa_link['target'] ?? '_blank'); ?>" rel="noopener noreferrer"
          class="bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4 group cursor-pointer">
          <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
            <?php rtc_whatsapp_icon('w-6 h-6 text-forest'); ?>
          </div>
          <div>
            <h3 class="font-heading font-semibold text-forest type-lg mb-1">WhatsApp</h3>
            <p class="text-muted type-sm mb-3">Canale preferito per foto, preventivi e aggiornamenti sulle lavorazioni.</p>
            <span class="text-forest group-hover:text-olive font-heading font-medium type-sm transition-colors"><?php echo esc_html($wa_link['title']); ?></span>
          </div>
        </a>
      <?php endif; ?>

      <?php if (!empty($email_link['url'])) : ?>
        <a href="<?php echo esc_url($email_link['url']); ?>"
          class="bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4 group cursor-pointer">
          <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
            <?php rtc_icon('mail', 'w-6 h-6 text-forest'); ?>
          </div>
          <div>
            <h3 class="font-heading font-semibold text-forest type-lg mb-1">Email</h3>
            <p class="text-muted type-sm mb-3">Per schede cliente, documentazione e comunicazioni formali.</p>
            <span class="text-forest group-hover:text-olive font-heading font-medium type-sm transition-colors break-all"><?php echo esc_html($email_link['title']); ?></span>
          </div>
        </a>
      <?php endif; ?>

      <?php if (!empty($phone_link['url'])) : ?>
        <a href="<?php echo esc_url($phone_link['url']); ?>"
          class="bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4 group cursor-pointer">
          <div class="w-12 h-12 rounded-xl bg-olive/10 flex items-center justify-center">
            <?php rtc_icon('phone', 'w-6 h-6 text-olive'); ?>
          </div>
          <div>
            <h3 class="font-heading font-semibold text-forest type-lg mb-1">Telefono</h3>
            <p class="text-muted type-sm mb-3">Per informazioni rapide negli orari di apertura del laboratorio.</p>
            <span class="text-forest group-hover:text-olive font-heading font-medium type-sm transition-colors"><?php echo esc_html($phone_link['title']); ?></span>
          </div>
        </a>
      <?php endif; ?>
    </div>

    <div class="mt-8 bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4 max-w-3xl">
      <?php rtc_icon('clock', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
      <div>
        <h3 class="font-heading font-semibold text-forest type-base mb-1">Tempi di risposta</h3>
        <p class="text-muted type-sm">
          Rispondiamo di norma entro <strong class="text-dark font-medium">1–2 giorni lavorativi</strong>.
          In periodi di alta richiesta i tempi possono allungarsi: ti aggiorniamo appena possibile.
        </p>
      </div>
    </div>
  </div>
</section>