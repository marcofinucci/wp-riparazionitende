<?php
/**
 * Template: Condizioni di lavorazione
 * URL: /condizioni-lavorazione-tende
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb'  => 'Condizioni di lavorazione',
    'h1'          => 'Condizioni di lavorazione delle tende',
    'intro'       => [
        'Per poter effettuare correttamente le lavorazioni, il materiale deve essere pulito, asciutto e lavorabile.',
        'Tende molto sporche, bagnate o con muffa avanzata possono non essere accettate.',
    ],
    'extra_blocks' => [
        [
            'heading' => 'Limitazioni',
            'text'    => 'Non tutte le tende possono essere recuperate. In alcuni casi il tessuto può risultare assottigliato, indebolito, deteriorato dai raggi UV o compromesso dalla muffa. In queste situazioni la lavorazione potrebbe non garantire una riparazione duratura.',
            'items'   => [],
        ],
    ],
    'lavorazioni' => [],
    'note'        => 'La pulizia non viene proposta come servizio autonomo. Quando necessaria, viene eseguita solo come intervento accessorio alla riparazione.',
    'related_pages' => [
        ['url' => '/garanzia-riparazioni-tende',      'label' => 'Garanzia'],
        ['url' => '/come-spedire-tenda-da-riparare',  'label' => 'Come spedire'],
    ],
]);

get_template_part('template-parts/layout', 'service');
