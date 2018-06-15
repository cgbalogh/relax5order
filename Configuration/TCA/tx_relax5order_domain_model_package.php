<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_package',
        'label' => 'size',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'size,activity,item',
        'iconfile' => 'EXT:relax5order/Resources/Public/Icons/tx_relax5order_domain_model_package.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, size, activity, item',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, size, activity, item'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_relax5order_domain_model_package',
                'foreign_table_where' => 'AND tx_relax5order_domain_model_package.pid=###CURRENT_PID### AND tx_relax5order_domain_model_package.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],

        'size' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_package.size',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'activity' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_package.activity',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5order_domain_model_activity',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'item' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_package.item',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5order_domain_model_item',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    
    ],
];
