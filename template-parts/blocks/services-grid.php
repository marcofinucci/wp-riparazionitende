<?php
defined('ABSPATH') || exit;

$eyebrow     = $args['eyebrow'] ?? '';
$heading     = $args['heading'] ?? '';
$intro       = $args['intro'] ?? '';
$services    = $args['services'] ?? [];
$footer_link = $args['footer_link'] ?? null;
$margin_top  = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no'      => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio'   => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

if (!$services) {
  return;
}

$heading_id = 'services-' . wp_unique_id();

$resolve_link = static function ($link): array {
  if (is_array($link)) {
    return [
      'url'    => $link['url'] ?? '',
      'title'  => $link['title'] ?? '',
      'target' => $link['target'] ?? '',
    ];
  }
  return ['url' => (string) $link, 'title' => '', 'target' => ''];
};

$resolve_image = static function ($image): string {
  if (is_array($image)) {
    return $image['url'] ?? '';
  }
  if (is_numeric($image)) {
    return wp_get_attachment_image_url((int) $image, 'large') ?: '';
  }
  return (string) $image;
};

$footer = $resolve_link($footer_link);
?>

<section class="block-services-grid <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ($eyebrow || $heading || $intro) : ?>
      <div class="text-center mb-12">
        <?php if ($eyebrow) : ?>
          <p class="text-olive font-heading font-semibold text-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($intro) : ?>
          <p class="text-muted mt-4 max-w-xl mx-auto"><?php echo esc_html($intro); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
      <?php foreach ($services as $service) : ?>
        <?php
        $link     = $resolve_link($service['link'] ?? '');
        $title    = $service['title'] ?? '';
        $desc     = $service['description'] ?? ($service['desc'] ?? '');
        $img      = $resolve_image($service['image'] ?? '');
        $img_alt  = $service['image_alt'] ?? ($service['img_alt'] ?? '');
        $badge    = $service['badge'] ?? '';
        if (!$title || !$link['url']) {
          continue;
        }
        ?>
        <article class="bg-cream rounded-2xl border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg transition-all duration-300 flex flex-col overflow-hidden group relative cursor-pointer">
          <a href="<?php echo esc_url($link['url']); ?>" class="absolute inset-0 z-10" aria-label="<?php echo esc_attr($title); ?>"></a>
          <?php if ($img) : ?>
            <div class="relative h-48 overflow-hidden rounded-t-2xl">
              <img
                src="<?php echo esc_url($img); ?>"
                alt="<?php echo esc_attr($img_alt); ?>"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy">
              <?php if ($badge) : ?>
                <span class="absolute top-3 right-3 text-xs font-heading font-semibold text-forest bg-white/90 backdrop-blur-sm px-2.5 py-1 rounded-full">
                  <?php echo esc_html($badge); ?>
                </span>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <div class="p-6 flex flex-col gap-4 flex-1">
            <div class="flex-1">
              <h3 class="font-heading font-semibold text-forest text-lg mb-2"><?php echo esc_html($title); ?></h3>
              <?php if ($desc) : ?>
                <p class="text-muted text-sm"><?php echo esc_html($desc); ?></p>
              <?php endif; ?>
            </div>
            <span class="inline-flex items-center gap-1.5 text-olive text-sm font-heading font-semibold group-hover:gap-2.5 transition-all mt-auto">
              Scopri di più
              <?php rtc_icon('chevron-right', 'w-4 h-4 transition-transform group-hover:translate-x-0.5'); ?>
            </span>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <?php if ($footer['url']) : ?>
      <div class="mt-8 text-center">
        <a href="<?php echo esc_url($footer['url']); ?>"
          class="inline-flex items-center gap-2 text-forest font-heading font-medium text-sm border border-canvas-dark/30 hover:border-olive/40 hover:shadow-lg px-5 py-2.5 rounded-full transition-all duration-300"
          <?php echo $footer['target'] ? ' target="' . esc_attr($footer['target']) . '"' : ''; ?>>
          <?php rtc_icon('users', 'w-4 h-4'); ?>
          <?php echo esc_html($footer['title'] ?: 'Scopri di più'); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>