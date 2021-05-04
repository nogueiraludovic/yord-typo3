<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Yord',
    'description' => 'Yord website extension',
    'category' => 'fe',
    'author' => 'Nogueira Ludovic',
    'author_email' => 'nogueira.ludovic@gmail.com',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-10.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
