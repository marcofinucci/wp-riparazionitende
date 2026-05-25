<?php
/**
 * Template: Riparazione Tende Trekking, Igloo e Outdoor
 * URL: /riparazione-tende-trekking-igloo
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb'  => 'Trekking / Igloo / Outdoor',
    'h1'          => 'Riparazione tende trekking, igloo e outdoor',
    'intro'       => [
        'Effettuiamo riparazioni su tende tecniche, tende igloo, tende trekking e tende outdoor utilizzate da escursionisti, campeggiatori e appassionati di attività all\'aria aperta.',
        'Queste tende presentano spesso danni localizzati e veloci da gestire.',
    ],
    'extra_blocks' => [
        [
            'heading' => 'Danni più frequenti',
            'text'    => '',
            'items'   => [
                'Stecca rotta',
                'Paleria piegata',
                'Punta paleria rotta',
                'Elastico interno usurato',
                'Strappi tessuto',
                'Cerniera rotta',
                'Finestra scollata',
                'Zanzariera rotta',
                'Buco nella tenda',
            ],
        ],
    ],
    'lavorazioni' => [
        'Riparazione stecche tenda',
        'Cambio paleria igloo',
        'Sostituzione elastici',
        'Riparazione cerniere',
        'Riparazione strappi',
        'Riparazione finestrelle',
        'Sostituzione segmenti paleria',
    ],
    'note'        => 'Su tende igloo, nylon e strutture simili non effettuiamo impermeabilizzazioni, termonastrature o lavorazioni industriali.',
    'show_salewa' => true,
    'related_pages' => [
        ['url' => '/riparazione-paleria-tende',      'label' => 'Paleria e ricambi'],
        ['url' => '/riparazione-tende-scout',        'label' => 'Gruppi Scout'],
        ['url' => '/come-spedire-tenda-da-riparare', 'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
