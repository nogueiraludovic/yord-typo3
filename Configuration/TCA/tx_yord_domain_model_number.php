<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tx_yord_domain_model_number'] = [
    'ctrl' => [
        'title' => 'Chiffres clés',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'ORDER BY sorting',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'typeicon_classes' => [
            'default' => 'ext-content-text'
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden'
    ],
    'columns' => [
        'pid' => [
            'label' => 'pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ]
        ],
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ]
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_yord_domain_model_number',
                'foreign_table_where' => 'AND tx_yord_domain_model_number.pid=###CURRENT_PID### AND tx_yord_domain_model_number.sys_language_uid IN (-1,0)',
                'default' => 0,
            ]
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'title' => [
            'label' => 'Titre',
            'exclude' => true,
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim,required'
            ]
        ],
        'description' => [
            'label' => 'Description',
            'exclude' => true,
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim,required'
            ]
        ],
        'number' => [
            'label' => 'Nombre',
            'exclude' => true,
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim'
            ]
        ],
        'icon' => [
            'label' => 'Icône',
            'exclude' => true,
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim',
                'fieldInformation' => [
                    'tagInformation' => [
                        'renderType' => 'NewsStaticText',
                        'options' => [
                            'labels' => [
                                [
                                    'label' => 'Prendre un texte d\'icone sur cette page: https://fontawesome.com/icons (prendre le texte des versions gratuites, exemple: "500px")',
                                    'bold' => true,
                                    'italic' => true,
                                ],
                            ],
                        ]
                    ]
                ]
            ]
        ],
        'image' => [

        ]
    ],
    'types' => [
        0 => [
            'showitem' => '--palette--;;paletteCore,title,description,icon'
        ]
    ],
    'palettes' => [
        'paletteCore' => [
            'showitem' => 'hidden,sys_language_uid,l10n_parent, l10n_diffsource,',
        ]
    ]
];
