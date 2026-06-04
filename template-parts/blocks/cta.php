<?php
defined('ABSPATH') || exit;

$title          = $args['title'] ?? 'Hai una tenda da riparare?';
$text           = $args['text'] ?? 'Invia foto della tenda e dei danni per ricevere una valutazione preliminare.';
$show_whatsapp  = !array_key_exists('show_whatsapp', $args) || $args['show_whatsapp'];
$show_spedire   = !array_key_exists('show_spedire', $args) || $args['show_spedire'];
$show_email     = !empty($args['show_email']);
$show_icon      = !empty($args['show_icon']);
$whatsapp_label = $args['whatsapp_label'] ?? 'Contattaci su WhatsApp';
$email_label    = $args['email_label'] ?? 'Oppure scrivi via email';
$margin_top     = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
$wa_url = rtc_whatsapp_link('Salve, vorrei una valutazione per la riparazione di una tenda.');
$heading_id = 'cta-' . wp_unique_id();
?>

<section class="block-cta bg-forest-dark py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <?php if ($show_icon) : ?>
      <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-6">
        <?php rtc_icon('tent', 'w-8 h-8 text-canvas'); ?>
      </div>
    <?php endif; ?>
    <?php if ($title) : ?>
      <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-2xl text-white mb-4"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <?php if ($text) : ?>
      <p class="text-white/65 mb-8 max-w-lg mx-auto <?php echo $show_icon ? 'type-lg mb-10' : ''; ?>"><?php echo esc_html($text); ?></p>
    <?php endif; ?>
    <?php if ($show_whatsapp || $show_spedire || $show_email) : ?>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <?php if ($show_whatsapp) : ?>
          <a href="<?php echo esc_url($wa_url); ?>" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
            <?php rtc_whatsapp_icon('w-5 h-5'); ?>
            <?php echo esc_html($whatsapp_label); ?>
          </a>
        <?php endif; ?>
        <?php if ($show_spedire) : ?>
          <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>" class="btn-outline">
            Come spedire
          </a>
        <?php endif; ?>
        <?php if ($show_email) : ?>
          <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn-outline">
            <?php echo esc_html($email_label); ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>