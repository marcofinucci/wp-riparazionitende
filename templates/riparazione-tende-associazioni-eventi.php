<?php
/*
Template Name: Riparazione Tende Associazioni ed Eventi
Template Post Type: page
*/
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb' => 'Associazioni e strutture',
    'h1'         => 'Riparazione tende comunitarie e strutture per eventi',
    'intro'      => [
        'Effettuiamo interventi su tende e strutture utilizzate da enti, associazioni e organizzazioni per attività operative, eventi e manifestazioni.',
    ],
    'extra_blocks' => [
        [
            'heading' => 'Realtà servite',
            'text'    => '',
            'items'   => [
                'Protezione Civile',
                'Misericordia',
                'Croce Rossa',
                'Pro Loco',
                'Associazioni locali',
            ],
        ],
        [
            'heading' => 'Strutture trattate',
            'text'    => '',
            'items'   => [
                'Tende comunitarie',
                'Tendoni',
                'Gazebi',
                'Strutture per feste',
                'Strutture per eventi',
            ],
        ],
    ],
    'lavorazioni' => [],
    'note'        => 'Non effettuiamo interventi su tende pneumatiche. Le strutture troppo grandi o non gestibili possono non essere accettate.',
    'related_pages' => [
        ['url' => '/riparazione-tende-speciali',     'label' => 'Tende speciali'],
        ['url' => '/collaborazioni-punti-raccolta',  'label' => 'Collaborazioni'],
        ['url' => '/come-spedire-tenda-da-riparare', 'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
