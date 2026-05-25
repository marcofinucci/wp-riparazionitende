<?php
/**
 * Template: Riparazione Tende Scout
 * URL: /riparazione-tende-scout
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb' => 'Gruppi Scout',
    'h1'         => 'Riparazione tende scout di squadriglia',
    'intro'      => [
        'Siamo specializzati nella manutenzione e riparazione di tende scout di squadriglia, conosciute anche come tende canadesi.',
        'Lavoriamo con gruppi scout provenienti da tutta Italia e gestiamo interventi su catino, telo, cerniere, occhielli, rinforzi, sacche e paleria.',
        'Le tende scout vengono utilizzate in modo intensivo durante campi, uscite e attività annuali. La manutenzione periodica permette di allungare la vita della tenda ed evitare sostituzioni costose.',
    ],
    'lavorazioni' => [
        'Riparazione catino tenda scout',
        'Riparazione telo tenda scout',
        'Sostituzione cerniere',
        'Sostituzione occhielli',
        'Rinforzi tessuto',
        'Riparazione strappi',
        'Manutenzione paleria di squadriglia',
        'Sostituzione elastici',
        'Riparazione sacche',
        'Impermeabilizzazione tenda scout (quando prevista)',
    ],
    'note'        => 'Le tende devono essere consegnate pulite e asciutte. Prima della spedizione è necessario inviare foto e compilare la scheda gruppo scout.',
    'extra_blocks' => [
        [
            'heading' => 'Associazioni scout',
            'text'    => 'Lavoriamo con gruppi scout appartenenti a diverse associazioni italiane, tra cui AGESCI, CNGEI, FSE e altre realtà del mondo scout.',
            'items'   => [],
        ],
    ],
    'related_pages' => [
        ['url' => '/riparazione-paleria-tende',        'label' => 'Paleria e ricambi'],
        ['url' => '/riparazione-tende-trekking-igloo', 'label' => 'Trekking / Igloo / Outdoor'],
        ['url' => '/come-spedire-tenda-da-riparare',   'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
