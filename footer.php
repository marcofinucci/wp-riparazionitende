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

$_footer_margin_top    = get_field('footer_margin_top') ?: 'medio';
$_footer_margin_classes = [
  'no'    => '',
  'medio' => 'mt-10 lg:mt-14',
];

$_footer_cta_title            = get_field('footer_cta_title', 'option');
$_footer_cta_text             = get_field('footer_cta_text', 'option');
$_footer_cta_primary          = get_field('footer_cta_link_primary', 'option');
$_footer_cta_secondary        = get_field('footer_cta_link_secondary', 'option');
$_footer_cta_background_image = get_field('footer_cta_background_image', 'option');
$_footer_cta_enabled   = (bool) get_field('show_footer_cta');
$_footer_cta_shown     = $_footer_cta_enabled && ($_footer_cta_title || $_footer_cta_text || !empty($_footer_cta_primary['url']) || !empty($_footer_cta_secondary['url']));

$_footer_brand_line_1      = get_field('header_brand_line_1', 'option') ?: 'Riparazioni Tende';
$_footer_brand_line_2      = get_field('header_brand_line_2', 'option') ?: 'Campeggio';
$_footer_brand_description = get_field('footer_brand_description', 'option') ?: 'Laboratorio artigianale specializzato nella manutenzione e riparazione di tende scout, verande roulotte, tende carrello e attrezzatura outdoor.';
$_footer_services_title    = get_field('footer_services_title', 'option') ?: 'Servizi';
$_footer_info_title        = get_field('footer_info_title', 'option') ?: 'Informazioni';
$_footer_how_title         = get_field('footer_how_it_works_title', 'option') ?: 'Come funziona';
$_footer_how_steps_raw     = get_field('footer_how_it_works_steps', 'option');
$_footer_how_steps         = $_footer_how_steps_raw
  ? array_values(array_filter(array_map('trim', explode("\n", (string) $_footer_how_steps_raw))))
  : [
    'Invia foto della tenda',
    'Compila la scheda cliente',
    'Ricevi la valutazione',
    'Spedisci il materiale',
    'Ritira la tenda riparata',
  ];
$_footer_copyright         = get_field('footer_copyright', 'option') ?: 'Riparazioni Tende Campeggio. Tutti i diritti riservati.';
?>
<!-- Fixed WhatsApp Button — solo mobile (stessa soglia del burger menu: lg:hidden) -->
<?php if ($_rtc_wa_url) : ?>
  <a href="<?php echo esc_url($_rtc_wa_url); ?>"
    target="<?php echo esc_attr($_rtc_wa['target'] ?? '_blank'); ?>" rel="noopener noreferrer"
    aria-label="Contattaci su WhatsApp"
    class="lg:hidden fixed bottom-2 right-2 z-50 w-12 h-12 bg-forest-light hover:bg-forest rounded-full shadow-lg flex items-center justify-center transition-all duration-200">
    <?php rtc_whatsapp_icon('w-6 h-6 text-white'); ?>
  </a>
<?php endif; ?>

<?php if ($_footer_cta_shown) : ?>
  <?php
  get_template_part('template-parts/blocks/cta', null, [
    'title'            => $_footer_cta_title,
    'text'             => $_footer_cta_text,
    'link_primary'     => $_footer_cta_primary,
    'link_secondary'   => $_footer_cta_secondary,
    'background_image' => $_footer_cta_background_image,
    'margin_top'       => $_footer_margin_top,
  ]);
  ?>
<?php endif; ?>

<?php
$_footer_margin = !$_footer_cta_shown ? ($_footer_margin_classes[$_footer_margin_top] ?? '') : '';
?>

<!-- Footer -->
<footer class="bg-forest text-white<?php echo $_footer_margin ? ' ' . esc_attr($_footer_margin) : ''; ?>">

  <!-- Footer Main -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Brand -->
      <div class="lg:col-span-1">
        <div class="flex items-center gap-2 mb-4 group">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="font-heading font-semibold text-white type-sm uppercase group-hover:text-canvas transition-colors flex flex-col !leading-none gap-1 tracking-wide" aria-label="<?php echo esc_attr(trim($_footer_brand_line_1 . ' ' . $_footer_brand_line_2) . ' - Home'); ?>">
            <div><?php echo esc_html($_footer_brand_line_1); ?></div>
            <div><?php echo esc_html($_footer_brand_line_2); ?></div>
          </a>
        </div>
        <?php if ($_footer_brand_description) : ?>
          <p class="text-white/65 type-sm mb-5">
            <?php echo esc_html($_footer_brand_description); ?>
          </p>
        <?php endif; ?>
        <div class="flex flex-col gap-2.5">
          <?php if ($_rtc_wa_url) : ?>
            <a href="<?php echo esc_url($_rtc_wa_url); ?>"
              target="<?php echo esc_attr($_rtc_wa['target'] ?? '_blank'); ?>" rel="noopener noreferrer"
              class="inline-flex items-center gap-2 text-white hover:text-canvas type-sm transition-colors">
              <?php rtc_whatsapp_icon('w-4 h-4 text-white'); ?>
              <?php echo esc_html($_rtc_wa_label ?: 'WhatsApp'); ?>
            </a>
          <?php endif; ?>
          <?php if ($_rtc_email_url) : ?>
            <a href="<?php echo esc_url($_rtc_email_url); ?>"
              class="inline-flex items-center gap-2 text-white hover:text-canvas type-sm transition-colors">
              <?php rtc_icon('mail', 'w-4 h-4 text-white'); ?>
              <?php echo esc_html($_rtc_email_label); ?>
            </a>
          <?php endif; ?>
          <?php if ($_rtc_phone_url) : ?>
            <a href="<?php echo esc_url($_rtc_phone_url); ?>"
              class="inline-flex items-center gap-2 text-whites hover:text-canvas type-sm transition-colors">
              <?php rtc_icon('phone', 'w-4 h-4 text-white'); ?>
              <?php echo esc_html($_rtc_phone_label); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Servizi -->
      <?php if (has_nav_menu('footer_services')) : ?>
        <div>
          <h3 class="font-heading font-semibold text-canvas type-sm uppercase tracking-wider mb-4"><?php echo esc_html($_footer_services_title); ?></h3>
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
          <h3 class="font-heading font-semibold text-canvas type-sm uppercase tracking-wider mb-4"><?php echo esc_html($_footer_info_title); ?></h3>
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
      <?php if ($_footer_how_steps) : ?>
        <div>
          <h3 class="font-heading font-semibold text-canvas type-sm uppercase tracking-wider mb-4"><?php echo esc_html($_footer_how_title); ?></h3>
          <ol class="space-y-3">
            <?php foreach ($_footer_how_steps as $i => $step) : ?>
              <li class="flex items-start gap-2.5 text-white/65 type-sm">
                <span class="w-5 h-5 rounded-full bg-forest-light text-white type-xs font-heading font-bold flex items-center justify-center flex-shrink-0 mt-0.5">
                  <?php echo $i + 1; ?>
                </span>
                <?php echo esc_html($step); ?>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="border-t border-forest-light">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-5 flex flex-col md:flex-row items-center justify-between md:gap-4">
      <p class="text-white/45 text-center md:text-left type-xs [&_a:hover]:text-white/70">
        &copy; <?php echo date('Y'); ?> <?php echo $_footer_copyright ?>
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