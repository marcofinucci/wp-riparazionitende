<?php
defined('ABSPATH') || exit;

$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];
?>

<section class="block-contact-form bg-canvas py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">

      <div class="lg:col-span-3">
        <h2 id="form-heading" class="font-heading font-semibold type-xl text-forest mb-2">Scrivici un messaggio</h2>
        <p class="text-muted type-sm  mb-8">
          Compila il modulo per inviarci una richiesta via email. Per inviare foto della tenda usa WhatsApp.
        </p>

        <?php echo do_shortcode('[contact-form-7 id="b1a7a33" title="Contattaci"]'); ?>
      </div>

      <aside class="lg:col-span-2 space-y-6">
        <div class=" rounded-2xl p-6 border border-canvas-dark">
          <h3 class="font-heading font-semibold text-forest type-base mb-4">Prima di scriverci</h3>
          <ol class="space-y-4">
            <?php
            $tips = [
              'Invia foto chiare della tenda e dei danni',
              'Indica marca, modello e tipo di tenda',
              'Non spedire prima di aver ricevuto conferma',
              'Compila la scheda cliente se richiesta',
            ];
            foreach ($tips as $i => $tip) : ?>
              <li class="flex items-start gap-3 type-sm">
                <span class="w-7 h-7 rounded-full bg-forest text-white font-heading font-bold flex items-center justify-center flex-shrink-0 type-xs"><?php echo $i + 1; ?></span>
                <span class="text-muted  pt-0.5"><?php echo esc_html($tip); ?></span>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>

        <div class="bg-forest/5 border border-forest/15 rounded-2xl p-6">
          <h3 class="font-heading font-semibold text-forest type-base mb-3">Laboratorio</h3>
          <p class="text-muted type-sm  mb-4">
            Lavoriamo su appuntamento e tramite spedizione da tutta Italia. Non è un punto vendita al dettaglio.
          </p>
          <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
            class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-medium type-sm transition-colors cursor-pointer">
            Come spedire il materiale
            <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
          </a>
        </div>
      </aside>

    </div>
  </div>
</section>