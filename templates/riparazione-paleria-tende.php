<?php
/*
Template Name: Riparazione Paleria Tende
Template Post Type: page
*/
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb' => 'Paleria e ricambi',
    'h1'         => 'Riparazione paleria tende igloo',
    'intro'      => [
        'Ripariamo e sostituiamo paleria per tende igloo, tende trekking e tende da campeggio.',
        'Interveniamo su stecche in vetroresina, stecche in alluminio, elastici interni, segmenti danneggiati e punte paleria.',
    ],
    'lavorazioni' => [
        'Riparazione paleria tenda',
        'Cambio pali tenda',
        'Sostituzione elastici interni',
        'Riparazione paleria piegata',
        'Sostituzione segmenti rotti',
        'Riparazione stecche tenda igloo',
        'Sostituzione punte paleria',
    ],
    'related_pages' => [
        ['url' => '/riparazione-tende-trekking-igloo', 'label' => 'Trekking / Igloo / Outdoor'],
        ['url' => '/riparazione-tende-scout',          'label' => 'Gruppi Scout'],
        ['url' => '/come-spedire-tenda-da-riparare',   'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
