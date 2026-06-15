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
$heading             = $args['heading'] ?? 'Contattaci';
$wa_title            = $args['wa_title'] ?? 'WhatsApp';
$wa_text             = $args['wa_text'] ?? 'Canale preferito per foto, preventivi e aggiornamenti sulle lavorazioni.';
$email_title         = $args['email_title'] ?? 'Email';
$email_text          = $args['email_text'] ?? 'Per schede cliente, documentazione e comunicazioni formali.';
$phone_title         = $args['phone_title'] ?? 'Telefono';
$phone_text          = $args['phone_text'] ?? 'Per informazioni rapide negli orari di apertura del laboratorio.';
$response_time_title = $args['response_time_title'] ?? 'Tempi di risposta';
$response_time_text  = $args['response_time_text'] ?? 'Rispondiamo di norma entro <strong>1–2 giorni lavorativi</strong>. In periodi di alta richiesta i tempi possono allungarsi: ti aggiorniamo appena possibile.';
?>

<section class="block-contact-canali <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ($heading) : ?>
      <h2 id="canali-heading" class="font-heading font-semibold type-xl text-forest mb-8"><?php echo esc_html($heading); ?></h2>
    <?php endif; ?>
    <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php if (!empty($wa_link['url'])) : ?>
        <a href="<?php echo esc_url($wa_link['url']); ?>"
          target="<?php echo esc_attr($wa_link['target'] ?? '_blank'); ?>" rel="noopener noreferrer"
          class="bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-accent/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4 group cursor-pointer">
          <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
            <?php rtc_whatsapp_icon('w-6 h-6 text-forest'); ?>
          </div>
          <div>
            <?php if ($wa_title) : ?>
              <h3 class="font-heading font-semibold text-forest type-lg mb-1"><?php echo esc_html($wa_title); ?></h3>
            <?php endif; ?>
            <?php if ($wa_text) : ?>
              <p class="text-muted type-sm mb-3"><?php echo esc_html($wa_text); ?></p>
            <?php endif; ?>
            <span class="text-forest group-hover:text-accent font-heading font-medium type-sm transition-colors"><?php echo esc_html($wa_link['title']); ?></span>
          </div>
        </a>
      <?php endif; ?>

      <?php if (!empty($email_link['url'])) : ?>
        <a href="<?php echo esc_url($email_link['url']); ?>"
          class="bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-accent/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4 group cursor-pointer">
          <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
            <?php rtc_icon('mail', 'w-6 h-6 text-forest'); ?>
          </div>
          <div>
            <?php if ($email_title) : ?>
              <h3 class="font-heading font-semibold text-forest type-lg mb-1"><?php echo esc_html($email_title); ?></h3>
            <?php endif; ?>
            <?php if ($email_text) : ?>
              <p class="text-muted type-sm mb-3"><?php echo esc_html($email_text); ?></p>
            <?php endif; ?>
            <span class="text-forest group-hover:text-accent font-heading font-medium type-sm transition-colors break-all"><?php echo esc_html($email_link['title']); ?></span>
          </div>
        </a>
      <?php endif; ?>

      <?php if (!empty($phone_link['url'])) : ?>
        <a href="<?php echo esc_url($phone_link['url']); ?>"
          class="bg-cream rounded-2xl p-6 border border-canvas-dark/30 hover:border-accent/40 hover:shadow-lg transition-all duration-300 flex flex-col gap-4 group cursor-pointer">
          <div class="w-12 h-12 rounded-xl bg-olive/10 flex items-center justify-center">
            <?php rtc_icon('phone', 'w-6 h-6 text-olive'); ?>
          </div>
          <div>
            <?php if ($phone_title) : ?>
              <h3 class="font-heading font-semibold text-forest type-lg mb-1"><?php echo esc_html($phone_title); ?></h3>
            <?php endif; ?>
            <?php if ($phone_text) : ?>
              <p class="text-muted type-sm mb-3"><?php echo esc_html($phone_text); ?></p>
            <?php endif; ?>
            <span class="text-forest group-hover:text-accent font-heading font-medium type-sm transition-colors"><?php echo esc_html($phone_link['title']); ?></span>
          </div>
        </a>
      <?php endif; ?>
    </div>

    <?php if ($response_time_title || $response_time_text) : ?>
      <div class="mt-8 bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4 max-w-3xl">
        <?php rtc_icon('clock', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
        <div>
          <?php if ($response_time_title) : ?>
            <h3 class="font-heading font-semibold text-forest type-base mb-1"><?php echo esc_html($response_time_title); ?></h3>
          <?php endif; ?>
          <?php if ($response_time_text) : ?>
            <p class="text-muted type-sm [&_strong]:text-dark [&_strong]:font-medium">
              <?php echo wp_kses_post($response_time_text); ?>
            </p>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>