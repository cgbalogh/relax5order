<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader',
        'label' => 'id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
        ],
        'searchFields' => 'id,total,tax_percent,tax,total_with_tax,activity,order_details,owner,person,company,address',
        'iconfile' => 'EXT:relax5order/Resources/Public/Icons/tx_relax5order_domain_model_orderheader.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, id, total, tax_percent, tax, total_with_tax, activity, order_details, owner, person, company, address',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, id, total, tax_percent, tax, total_with_tax, activity, order_details, owner, person, company, address'],
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
                'foreign_table' => 'tx_relax5order_domain_model_orderheader',
                'foreign_table_where' => 'AND tx_relax5order_domain_model_orderheader.pid=###CURRENT_PID### AND tx_relax5order_domain_model_orderheader.sys_language_uid IN (-1,0)',
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

        'id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'total' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.total',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'tax_percent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.tax_percent',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'tax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.tax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'total_with_tax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.total_with_tax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'activity' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.activity',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5order_domain_model_activity',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'order_details' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.order_details',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5order_domain_model_orderdetails',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'owner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.owner',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'fe_users',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'person' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.person',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5core_domain_model_person',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'company' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.company',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_relax5core_domain_model_company',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_orderheader.address',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5core_domain_model_address',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    
    ],
];
