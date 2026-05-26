<?php
/**
 * Template: Manutenzione Tende Carrello e Stagionali
 * URL: /manutenzione-tende-carrello
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb' => 'Tende carrello e stagionali',
    'h1'         => 'Manutenzione tende carrello e tende stagionali',
    'intro'      => [
        'Le tende carrello e le tende stagionali in cotone richiedono manutenzione periodica per mantenere efficienza, tenuta e durata nel tempo.',
        'Interveniamo su tende carrello, tende casetta, tende tunnel, tende familiari da campeggio, strutture in cotone e tende o tendalini camper quando lavorabili.',
    ],
    'lavorazioni' => [
        'Manutenzione tenda carrello',
        'Impermeabilizzazione tenda carrello',
        'Riparazione danni ordinari',
        'Riparazione tessuto',
        'Riparazione cuciture',
        'Sostituzione cerniere',
        'Sostituzione finestre e zanzariere',
        'Recupero tende in cotone',
    ],
    'note'        => 'Le lavorazioni vengono valutate in base alle condizioni del materiale e alla reale recuperabilità della struttura.',
    'related_pages' => [
        ['url' => '/riparazione-verande-roulotte',   'label' => 'Verande roulotte'],
        ['url' => '/riparazione-tende-speciali',     'label' => 'Tende speciali'],
        ['url' => '/come-spedire-tenda-da-riparare', 'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
