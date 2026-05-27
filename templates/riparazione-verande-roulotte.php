<?php
/*
Template Name: Riparazione Verande Roulotte
Template Post Type: page
*/
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb' => 'Verande roulotte',
    'h1'         => 'Riparazione verande roulotte',
    'intro'      => [
        'Le verande roulotte sono tra le strutture più soggette a usura perché vengono montate per lunghi periodi durante la stagione.',
        'Interveniamo su verande utilizzate in campeggi stagionali, soprattutto lungo la costa e nei campeggi sui laghi.',
    ],
    'lavorazioni' => [
        'Sostituzione zanzariere veranda roulotte',
        'Sostituzione finestre veranda roulotte',
        'Riparazione cerniere veranda',
        'Sostituzione cursori',
        'Rifacimento cordoli',
        'Sistemazione guide',
        'Fascioni perimetrali',
        'Riparazione strappi',
        'Occhielli',
        'Elastici e fettucce',
        'Riparazione cucinotti veranda',
        'Riparazioni varie su strutture stagionali',
    ],
    'note'         => 'La pulizia non viene proposta come servizio autonomo. Quando necessaria, viene effettuata solo come preparazione del materiale per la lavorazione.',
    'extra_blocks' => [],
    'related_pages' => [
        ['url' => '/manutenzione-tende-carrello',         'label' => 'Tende carrello e stagionali'],
        ['url' => '/riparazione-tende-associazioni-eventi', 'label' => 'Associazioni e strutture'],
        ['url' => '/come-spedire-tenda-da-riparare',       'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
