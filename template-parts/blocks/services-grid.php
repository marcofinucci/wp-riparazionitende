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

$resolve_image = static function ($image): string {
  if (is_array($image)) {
    return $image['url'] ?? '';
  }
  if (is_numeric($image)) {
    return wp_get_attachment_image_url((int) $image, 'large') ?: '';
  }
  return (string) $image;
};

$items = [];
foreach ($services as $service) {
  $link    = $resolve_link($service['link'] ?? '');
  $title   = $service['title'] ?? '';
  $img     = $resolve_image($service['image'] ?? '');
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
      <div class="text-center mb-12">
        <?php if ($eyebrow) : ?>
          <p class="text-olive font-heading font-semibold type-sm uppercase tracking-widest mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($heading) : ?>
          <h2 id="<?php echo esc_attr($heading_id); ?>" class="font-heading font-bold type-3xl text-forest"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        <?php if ($intro) : ?>
          <p class="text-muted type-base mt-4 max-w-xl mx-auto"><?php echo esc_html($intro); ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 sm:grid-cols-6 lg:grid-cols-12 gap-3 lg:gap-4 auto-rows-[150px] sm:auto-rows-[170px] lg:auto-rows-[190px]">
      <?php foreach ($items as $i => $item) : ?>
        <?php
        $pattern = $i % 7;
        if ($pattern === 0 || $pattern === 1 || $pattern === 5 || $pattern === 6) {
          $span_class = 'col-span-1 sm:col-span-3 lg:col-span-6';
        } else {
          $span_class = 'col-span-1 sm:col-span-2 lg:col-span-4';
        }
        ?>
        <article class="<?php echo esc_attr($span_class); ?> relative h-full bg-forest rounded-md overflow-hidden group transition-all duration-300">
          <a href="<?php echo esc_url($item['link']['url']); ?>" class="absolute inset-0 z-20" aria-label="<?php echo esc_attr($item['title']); ?>" <?php echo $item['link']['target'] ? ' target="' . esc_attr($item['link']['target']) . '"' : ''; ?>></a>

          <?php if ($item['img']) : ?>
            <img
              src="<?php echo esc_url($item['img']); ?>"
              alt="<?php echo esc_attr($item['title']); ?>"
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
              loading="lazy">
          <?php endif; ?>

          <div class="absolute inset-0 bg-gradient-to-t from-black/95  to-black/10"></div>

          <?php if ($item['badge']) : ?>
            <span class="absolute top-3 left-3 z-30 type-xs font-heading font-semibold text-white bg-forest px-2 py-1 rounded-full">
              <?php echo esc_html($item['badge']); ?>
            </span>
          <?php endif; ?>

          <div class="relative z-10 p-4 lg:p-5 h-full flex flex-col justify-end">
            <h3 class="font-heading font-bold text-white type-xl uppercase text-balance">
              <?php echo esc_html($item['title']); ?>
            </h3>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>