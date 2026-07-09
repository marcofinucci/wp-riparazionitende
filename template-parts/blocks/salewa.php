<?php
defined('ABSPATH') || exit;

$margin_top = $args['margin_top'] ?? 'medio';
$margin_top_classes = [
  'no' => '',
  'piccolo' => 'mt-6 lg:mt-8',
  'medio' => 'mt-10 lg:mt-14',
];
$margin_top_class = $margin_top_classes[$margin_top] ?? $margin_top_classes['medio'];

$title       = get_field('salewa_title', 'option');
$text        = get_field('salewa_text', 'option');
$link        = get_field('salewa_link', 'option');
$texture_url = get_template_directory_uri() . '/assets/images/riparazionitendecampeggio-texture.svg';
?>

<section class="block-salewa relative overflow-hidden bg-canvas py-12 lg:py-14 <?php echo esc_attr($margin_top_class); ?>">
  <img
    src="<?php echo esc_url($texture_url); ?>"
    alt=""
    aria-hidden="true"
    class="absolute inset-0 w-full h-full object-cover opacity-60"
    loading="lazy"
    decoding="async">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="reveal max-w-2xl mx-auto text-center">
      <div class="mb-6 flex justify-center text-forest">
        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="53" viewBox="0 0 86 53" fill="none" data-v-5fd9d08b="">
          <g clip-path="url(#clip0_10675_2784)">
            <path d="M29.1925 42.4336H25.5653L22.5652 48.8519L16.8952 45.1776L17.1379 44.6517H22.1944L23.2326 42.4336H16.1603C15.7086 42.4336 15.3243 42.7033 15.1491 43.0876L14.4614 44.564C14.0703 45.3866 14.3333 46.3911 15.1086 46.917L19.7336 49.9171L19.6055 50.1935H13.1939L12.1556 52.4116H23.5967L27.3722 44.3416L30.1094 50.1935H26.8665L27.9048 52.4116H33.8646L29.1992 42.4336H29.1925ZM54.414 44.6517L55.4523 42.4336H44.7731V50.1868H37.957V42.4336H35.3007V52.4116H44.2607L45.3057 50.1868H47.0316L45.9799 52.4116H54.4006L55.4388 50.1868H47.4159V48.3867H52.6611L53.5578 46.4653H47.4159V44.6517H54.3938H54.414ZM78.1524 52.4116H72.1857L71.1542 50.1935H74.3904L71.6531 44.3416L67.8777 52.4116H63.6977L63.1516 48.5283L61.3447 52.4116H56.8951V42.4336H59.5514V50.4497L61.4863 46.3102H65.4978L66.0843 50.4497L69.8328 42.4336H73.4802L78.1456 52.4116H78.1524Z" fill="currentColor"></path>
            <path d="M53.032 28.1341L51.0229 31.6196L78.1524 21.7427L85.9933 4.01145L53.0252 28.1341H53.032ZM12.1489 20.7516L41.0786 28.5318L46.9373 38.6852L50.0925 33.2242L42.6022 24.2709L0 0L12.1489 20.7516Z" fill="currentColor"></path>
          </g>
          <defs>
            <clipPath id="clip0_10675_2784">
              <rect width="86" height="52.4117" fill="white"></rect>
            </clipPath>
          </defs>
        </svg>
      </div>
      <?php if ($title || $text || !empty($link['url'])) : ?>
        <div class="flow">
          <?php if ($title) : ?>
            <h2 id="salewa-heading" class="font-heading font-semibold type-xl text-forest rich-text">
              <?php echo wp_kses_post($title); ?>
            </h2>
          <?php endif; ?>
          <?php if ($text) : ?>
            <p class="text-muted mt-4 rich-text">
              <?php echo wp_kses_post($text); ?>
            </p>
          <?php endif; ?>
          <?php if (!empty($link['url'])) : ?>
            <a href="<?php echo esc_url($link['url']); ?>"
              <?php if (!empty($link['target'])) : ?>target="<?php echo esc_attr($link['target']); ?>" rel="noopener noreferrer" <?php endif; ?>
              class="btn-primary mt-8">
              <?php echo esc_html($link['title']); ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>