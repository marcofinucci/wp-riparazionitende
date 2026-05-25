<?php
/**
 * Lucide icons — SVG inlinati lato PHP da file locali.
 * Icone scaricate da https://lucide.dev/icons/ (lucide-static via jsDelivr CDN).
 * File SVG in: assets/images/icons/{name}.svg
 */
defined('ABSPATH') || exit;

/**
 * Stampa inline un'icona Lucide.
 *
 * @param string               $name  Nome icona Lucide (kebab-case), es. 'chevron-right'
 * @param string               $class Classi CSS aggiuntive (es. 'w-4 h-4 text-forest')
 * @param array<string, mixed> $attrs Attributi HTML extra sull'<svg> (es. ['data-faq-icon' => ''])
 */
function rtc_icon(string $name, string $class = 'w-4 h-4', array $attrs = []): void {
    static $cache = [];

    if (!isset($cache[$name])) {
        $file = get_template_directory() . '/assets/images/icons/' . $name . '.svg';
        if (!file_exists($file)) {
            return;
        }
        $cache[$name] = file_get_contents($file);
    }

    $svg = $cache[$name];

    // Rimuove width/height solo dal tag <svg> root (non da elementi interni come <rect>)
    $svg = preg_replace('/(<svg\b[^>]*)\s+width="[^"]*"/', '$1', $svg, 1);
    $svg = preg_replace('/(<svg\b[^>]*)\s+height="[^"]*"/', '$1', $svg, 1);

    // Sostituisce la class del file originale con quella personalizzata
    $full_class = esc_attr(trim('lucide lucide-' . $name . ' ' . $class));
    $svg = preg_replace('/\bclass="[^"]*"/', 'class="' . $full_class . '"', $svg, 1);

    // Aggiunge aria-hidden se non viene specificato né aria-hidden né aria-label
    if (!isset($attrs['aria-hidden']) && !isset($attrs['aria-label'])) {
        $attrs = array_merge(['aria-hidden' => 'true'], $attrs);
    }

    // Inietta attributi extra sull'<svg>
    $extra = '';
    foreach ($attrs as $key => $value) {
        if ($value === null || $value === false) {
            continue;
        }
        $extra .= ' ' . esc_attr($key) . ($value === '' ? '' : '="' . esc_attr((string) $value) . '"');
    }

    if ($extra) {
        $svg = preg_replace('/<svg\s/', '<svg' . $extra . ' ', $svg, 1);
    }

    // Rimuove il commento di licenza per non inquinare l'HTML
    $svg = preg_replace('/<!--[^>]*-->\s*/', '', $svg);

    echo $svg;
}

/**
 * Stampa l'icona WhatsApp (brand icon, non presente in Lucide).
 *
 * @param string $class Classi CSS (es. 'w-5 h-5')
 */
function rtc_whatsapp_icon(string $class = 'w-5 h-5'): void {
    printf(
        '<svg class="%s" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>',
        esc_attr($class)
    );
}
