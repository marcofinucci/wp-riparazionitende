<?php
defined('ABSPATH') || exit;

$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

$heading       = $args['heading'] ?? 'Scrivici un messaggio';
$intro         = $args['intro'] ?? 'Compila il modulo per inviarci una richiesta via email. Per inviare foto della tenda usa WhatsApp.';
$cf7_shortcode = $args['cf7_shortcode'] ?? '[contact-form-7 id="b1a7a33" title="Contattaci"]';
$tips_heading  = $args['tips_heading'] ?? 'Prima di scriverci';
$tips          = $args['tips'] ?? [];
$lab_heading   = $args['lab_heading'] ?? 'Laboratorio';
$lab_text      = $args['lab_text'] ?? 'Lavoriamo su appuntamento e tramite spedizione da tutta Italia. Non è un punto vendita al dettaglio.';
$lab_link      = $args['lab_link'] ?? [];

if (!$tips) {
  $tips = [
    ['text' => 'Invia foto chiare della tenda e dei danni'],
    ['text' => 'Indica marca, modello e tipo di tenda'],
    ['text' => 'Non spedire prima di aver ricevuto conferma'],
    ['text' => 'Compila la scheda cliente se richiesta'],
  ];
}
?>

<section class="block-contact-form bg-canvas py-14 lg:py-16 <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">

      <div class="reveal lg:col-span-3">
        <?php if ($heading) : ?>
          <h2 id="form-heading" class="font-heading font-semibold type-xl text-forest mb-2"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($intro) : ?>
          <p class="text-muted type-sm  mb-8">
            <?php echo esc_html($intro); ?>
          </p>
        <?php endif; ?>

        <?php if ($cf7_shortcode) : ?>
          <?php echo do_shortcode($cf7_shortcode); ?>
        <?php endif; ?>
      </div>

      <aside class="reveal lg:col-span-2 space-y-6" style="--reveal-delay:120ms">
        <?php if ($tips_heading || $tips) : ?>
          <div class=" rounded-2xl p-6 border border-canvas-dark">
            <?php if ($tips_heading) : ?>
              <h3 class="font-heading font-semibold text-forest type-base mb-4"><?php echo esc_html($tips_heading); ?></h3>
            <?php endif; ?>
            <?php if ($tips) : ?>
              <ol class="space-y-4">
                <?php foreach ($tips as $i => $row) : ?>
                  <?php
                  $tip = $row['text'] ?? '';
                  if (!$tip) {
                    continue;
                  }
                  ?>
                  <li class="flex items-start gap-3 type-sm">
                    <span class="w-7 h-7 rounded-full bg-forest text-white font-heading font-bold flex items-center justify-center flex-shrink-0 type-xs"><?php echo $i + 1; ?></span>
                    <span class="text-muted  pt-0.5"><?php echo esc_html($tip); ?></span>
                  </li>
                <?php endforeach; ?>
              </ol>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($lab_heading || $lab_text || !empty($lab_link['url'])) : ?>
          <div class="bg-forest/5 border border-forest/15 rounded-2xl p-6">
            <?php if ($lab_heading) : ?>
              <h3 class="font-heading font-semibold text-forest type-base mb-3"><?php echo esc_html($lab_heading); ?></h3>
            <?php endif; ?>
            <?php if ($lab_text) : ?>
              <p class="text-muted type-sm  mb-4">
                <?php echo esc_html($lab_text); ?>
              </p>
            <?php endif; ?>
            <?php if (!empty($lab_link['url'])) : ?>
              <a href="<?php echo esc_url($lab_link['url']); ?>"
                <?php if (!empty($lab_link['target'])) : ?>target="<?php echo esc_attr($lab_link['target']); ?>" rel="noopener noreferrer" <?php endif; ?>
                class="inline-flex items-center gap-2 text-forest hover:text-accent font-heading font-medium type-sm transition-colors cursor-pointer">
                <?php echo esc_html($lab_link['title'] ?: 'Come spedire il materiale'); ?>
                <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </aside>

    </div>
  </div>
</section>