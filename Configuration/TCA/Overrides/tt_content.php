<?php
// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Google maps',
        'google_maps',
        'content-text',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['palettes']['map_config'] = [
    'label' => 'Configuration de la map',
    'showitem' => 'latitude, longitude, maps_zoom'
];

$GLOBALS['TCA']['tt_content']['types']['google_maps'] = [
    'showitem' => '
 --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, 
    --palette--;;general, 
    --palette--;;headers, 
    bodytext;Colonne de gauche, 
    right_column;Colonne de droite,
    point;Points google maps,
    --palette--;;map_config,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, 
    --palette--;;frames, 
    --palette--;;appearanceLinks, 
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, 
    --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, 
    --palette--;;hidden, --palette--;;access, 
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, 
--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category, categories, 
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, 
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
      ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
        'right_column' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['right_column'] = [
    'l10n_mode' => 'prefixLangTitle',
    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
    'config' => [
        'type' => 'text',
        'cols' => 80,
        'rows' => 15,
        'softref' => 'typolink_tag,email[subst],url',
        'search' => [
            'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\''
        ]
    ]
];

$GLOBALS['TCA']['tt_content']['columns']['latitude'] = [
    'l10n_mode' => 'prefixLangTitle',
    'label' => 'Latitude',
    'config' => [
        'type' => 'input',
        'size' => 50,
        'max' => 255,
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['longitude'] = [
    'l10n_mode' => 'prefixLangTitle',
    'label' => 'Longitude',
    'config' => [
        'type' => 'input',
        'size' => 50,
        'max' => 255,
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['maps_zoom'] = [
    'l10n_mode' => 'prefixLangTitle',
    'label' => 'Zoom de la map',
    'config' => [
        'type' => 'input',
        'size' => 50,
        'max' => 255,
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['point'] =
    [
        'exclude' => true,
        'label' => 'Point google maps',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tx_yord_domain_model_point',
            'foreign_table' => 'tx_yord_domain_model_point',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 10,
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ]
    ];
