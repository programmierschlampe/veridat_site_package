<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:veridat-site-package/Resources/Private/Language/locallang_db.xlf:tx_veridat_domain_model_valuerow',
        'label' => 'LLL:EXT:veridat-site-package/Resources/Private/Language/locallang_db.xlf:tx_veridat_domain_model_valuerow',
        'delete' => 'deleted',
        'iconfile' => 'EXT:veridat-site-package/Resources/Public/Icons/Valuerow.svg',
        'searchFields' => '',
	    'enablecolumns' => [
		    'disabled' => 'hidden',
	    ]
    ],
    'columns' => [
        'selected_valueboxes' => [
            'config' => [
                'appearance' => [
                    'collapseAll' => 1,
                    'enabledControls' => [
                        'delete' => 1,
                        'dragdrop' => 1,
                        'hide' => 1,
                        'info' => 1,
                        'new' => 1,
                        'sort' => 1,
                    ],
                    'expandSingle' => 1,
                    'newRecordLinkTitle' => 'LLL:EXT:veridat-site-package/Resources/Private/Language/locallang_db.xml:tx_veridat_domain_model_valuerow.addNewRecord',
                    'useSortable' => 1,
                ],
                'foreign_field' => 'parentid',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table' => 'tx_veridat_domain_model_valuebox',
                'maxitems' => 50,
                'type' => 'inline',
            ],
            'exclude' => 0,
            'label' => 'LLL:EXT:veridat-site-package/Resources/Private/Language/locallang_db.xml:tx_veridat_domain_model_valuerow.selected_valueboxes',
        ],
        'hidden' => [
            'config' => [
                'items' => [
                    '0' => [
                        '0' => '',
                        'invertStateDisplay' => 1,
                    ]
                ],
                'renderType' => 'checkboxToggle',
                'type' => 'check',
            ],
            'exclude' => '1',
            'label' => ' LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'selected_valueboxes, hidden']
    ]
];