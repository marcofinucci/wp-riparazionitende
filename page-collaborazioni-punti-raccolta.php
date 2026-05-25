<?php
/**
 * Template: Collaborazioni e punti raccolta
 * URL: /collaborazioni-punti-raccolta
 */
defined('ABSPATH') || exit;

set_query_var('rtc_page_data', [
    'breadcrumb'  => 'Collaborazioni',
    'h1'          => 'Collaborazioni e punti di raccolta',
    'intro'       => [
        'Valutiamo collaborazioni con realtà del settore scout, outdoor e campeggio interessate a offrire un punto di riferimento locale per manutenzione e riparazione tende.',
        'Cerchiamo collaborazioni con cooperative scout, negozi outdoor, camper service, campeggi, attività multiservizi e punti spedizione o raccolta.',
        'L\'obiettivo è facilitare la gestione delle spedizioni e creare una rete di riferimento per clienti provenienti da tutta Italia.',
    ],
    'extra_blocks' => [
        [
            'heading' => 'Come funziona',
            'text'    => 'Il collaboratore riceve il materiale, prepara la spedizione, centralizza le lavorazioni e facilita la gestione per i clienti locali. Il laboratorio si occupa della lavorazione, della gestione tecnica, della comunicazione e della restituzione del materiale.',
            'items'   => [],
        ],
        [
            'heading' => 'Tipologie di collaboratori cercate',
            'text'    => '',
            'items'   => [
                'Cooperative scout',
                'Negozi outdoor e attrezzatura campeggio',
                'Camper service',
                'Campeggi e villaggi',
                'Attività multiservizi',
                'Punti spedizione e raccolta',
            ],
        ],
    ],
    'lavorazioni' => [],
    'note'        => 'Non utilizziamo loghi di terzi senza autorizzazione. Per informazioni scrivici tramite WhatsApp o email.',
    'related_pages' => [
        ['url' => '/riparazione-tende-scout',        'label' => 'Gruppi Scout'],
        ['url' => '/riparazione-tende-associazioni-eventi', 'label' => 'Associazioni e strutture'],
        ['url' => '/contatti',                       'label' => 'Contatti'],
    ],
]);

get_template_part('template-parts/layout', 'service');
