<?php
defined('ABSPATH') || exit;

$title         = $args['title'] ?? 'Hai una tenda da riparare?';
$text          = $args['text'] ?? 'Invia foto della tenda e dei danni per ricevere una valutazione preliminare.';
$show_whatsapp = !array_key_exists('show_whatsapp', $args) || $args['show_whatsapp'];
$show_spedire  = !array_key_exists('show_spedire', $args) || $args['show_spedire'];
$whatsapp_label = $args['whatsapp_label'] ?? 'Contattaci su WhatsApp';
$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

$wa_url = rtc_whatsapp_link('Salve, vorrei una valutazione per la riparazione di una tenda.');
?>

<section class="block-cta bg-forest py-16 lg:py-20 <?php echo esc_attr($margin_top_class); ?>">
  <div class="container-site text-center">
    <?php if ($title) : ?>
      <h2 class="font-heading font-bold text-2xl md:text-3xl text-white mb-4"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <?php if ($text) : ?>
      <p class="text-white/65 mb-8 max-w-lg mx-auto "><?php echo esc_html($text); ?></p>
    <?php endif; ?>
    <?php if ($show_whatsapp || $show_spedire) : ?>
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
      </div>
    <?php endif; ?>
  </div>
</section>