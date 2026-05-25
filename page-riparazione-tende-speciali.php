<?php
/**
 * Template: Riparazione Tende Speciali
 * URL: /riparazione-tende-speciali
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb' => 'Tende speciali',
    'h1'         => 'Riparazione tende speciali e outdoor',
    'intro'      => [
        'Valutiamo interventi anche su tende utilizzate per campeggio on the road, pesca, bushcraft e glamping.',
        'Ogni lavorazione viene valutata in base a dimensioni, materiali, trasportabilità e condizioni generali.',
    ],
    'extra_blocks' => [
        [
            'heading' => 'Tipologie trattate',
            'text'    => '',
            'items'   => [
                'Tende da tetto auto',
                'Tende da tetto vintage',
                'Tende carpfishing',
                'Tarp bushcraft',
                'Tende glamping',
                'Tende a campana',
                'Yurta',
                'Tepee',
                'Tende medievali',
                'Tende LARP',
                'Tende per rievocazione storica',
            ],
        ],
    ],
    'lavorazioni' => [],
    'note'        => 'Ogni struttura viene valutata individualmente prima dell\'accettazione del lavoro. Le strutture troppo grandi o non trasportabili potrebbero non essere accettate.',
    'related_pages' => [
        ['url' => '/manutenzione-tende-carrello',          'label' => 'Tende carrello e stagionali'],
        ['url' => '/riparazione-tende-associazioni-eventi', 'label' => 'Associazioni e strutture'],
        ['url' => '/come-spedire-tenda-da-riparare',        'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
