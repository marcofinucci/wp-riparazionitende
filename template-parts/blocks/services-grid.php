<?php
defined('ABSPATH') || exit;

$eyebrow     = $args['eyebrow'] ?? '';
$heading     = $args['heading'] ?? '';
$intro       = $args['intro'] ?? '';
$services    = $args['services'] ?? [];
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

$resolve_image_id = static function ($image): int {
  if (is_array($image)) {
    return (int) ($image['ID'] ?? 0);
  }
  if (is_numeric($image)) {
    return (int) $image;
  }
  return 0;
};

$items = [];
foreach ($services as $service) {
  $link    = $resolve_link($service['link'] ?? '');
  $title   = $service['title'] ?? '';
  $img     = $resolve_image_id($service['image'] ?? '');
  $badge   = $service['badge'] ?? '';

  if (!$title || !$link['url']) {
    continue;
  }

  $items[] = [
    'link'    => $link,
    'title'   => $title,
    'img'     => $img,
    'badge'   => $badge,
  ];
}

if (!$items) {
  return;
}

?>

<section class="block-services-grid <?php echo esc_attr($margin_top_class); ?>">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if ($eyebrow || $heading || $intro) : ?>
      <div class="reveal text-center mb-12">
        <?php if ($eyebrow) : ?>
          <p class="text-accent font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($intro) : ?>
          <p class="text-muted type-base mt-4 max-w-xl mx-auto"><?php echo esc_html($intro); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="flex flex-wrap -mx-2 justify-center">
      <?php foreach ($items as $i => $item) : ?>
        <article class="reveal w-full sm:w-1/2 lg:w-1/3 px-2 mt-4" style="--reveal-delay:<?php echo esc_attr(($i % 4) * 80); ?>ms">
          <a href="<?php echo esc_url($item['link']['url']); ?>" class="relative flex flex-col h-full rounded-2xl overflow-hidden bg-forest-dark shadow-md hover:shadow-2xl group transition-all duration-300 transform-gpu [backface-visibility:hidden]" aria-label="<?php echo esc_attr($item['title']); ?>" <?php echo $item['link']['target'] ? ' target="' . esc_attr($item['link']['target']) . '"' : ''; ?>>
            <div class="relative aspect-[4/5] overflow-hidden rounded-2xl transform-gpu [backface-visibility:hidden]">
              <?php if ($item['img']) : ?>
                <?= wp_get_attachment_image($item['img'], 'large', false, [
                  'class'   => 'absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110',
                  'alt'     => esc_attr($item['title']),
                  'loading' => 'lazy',
                ]) ?>
              <?php endif; ?>

              <?php if ($item['badge']) : ?>
                <span class="absolute top-3 left-3 z-30 type-xs font-heading font-semibold text-white bg-accent px-2.5 py-1 rounded-full shadow-sm">
                  <?php echo esc_html($item['badge']); ?>
                </span>
              <?php endif; ?>
            </div>

            <div class="bg-forest-dark p-5 flex items-center justify-between gap-3 grow">
              <h3 class="font-heading font-bold text-white type-lg !leading-tight text-balance">
                <?php echo esc_html($item['title']); ?>
              </h3>
              <span class="flex-shrink-0 w-9 h-9 rounded-full bg-white/15 backdrop-blur-sm border border-white/20 flex items-center justify-center text-white transition-colors duration-300 group-hover:bg-accent group-hover:border-accent" aria-hidden="true">
                <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
              </span>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>