<?php
/**
 * Template: Garanzia riparazioni
 * URL: /garanzia-riparazioni-tende
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb'  => 'Garanzia',
    'h1'          => 'Garanzia sulle lavorazioni',
    'intro'       => [
        'Le riparazioni vengono eseguite con cura artigianale utilizzando materiali compatibili con il tipo di intervento.',
        'La garanzia riguarda esclusivamente le lavorazioni effettuate e le parti trattate.',
        'Ogni tenda ha età, usura e condizioni diverse. La durata nel tempo dipende dall\'utilizzo, dall\'esposizione agli agenti atmosferici e dalla conservazione del materiale.',
    ],
    'extra_blocks' => [
        [
            'heading' => 'Esclusioni dalla garanzia',
            'text'    => '',
            'items'   => [
                'Usura del tessuto originale',
                'Muffa o conservazione errata',
                'Montaggio scorretto',
                'Utilizzo improprio',
                'Danni successivi alla lavorazione',
                'Interventi successivi di terzi',
            ],
        ],
    ],
    'lavorazioni' => [],
    'note'        => 'Per qualsiasi dubbio sulla garanzia o sulla lavorazione effettuata, contattaci prima di procedere con ulteriori interventi.',
    'related_pages' => [
        ['url' => '/condizioni-lavorazione-tende',   'label' => 'Condizioni di lavorazione'],
        ['url' => '/come-spedire-tenda-da-riparare', 'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
