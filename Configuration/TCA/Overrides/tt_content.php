<?php

$llFile = 'dm_schema/Resources/Private/Language/locallang_be.xlf';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'tx_dmschema_question' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_question',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_answer' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_answer',
        'config' => [
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'search' => [
                'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\''
            ]
        ]
    ],
    'tx_dmschema_title' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_title',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_description' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_description',
        'config' => [
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'search' => [
                'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\''
            ]
        ]
    ],
    'tx_dmschema_date_posted' => [
        'exclude' => true,
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_date_posted',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0
        ],
        'l10n_mode' => 'exclude',
        'l10n_display' => 'defaultAsReadonly'
    ],
    'tx_dmschema_valid_through' => [
        'exclude' => true,
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_valid_through',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => [
                'upper' => mktime(0, 0, 0, 1, 1, 2038)
            ]
        ],
        'l10n_mode' => 'exclude',
        'l10n_display' => 'defaultAsReadonly'
    ],
    'tx_dmschema_employment_type' => [
        'exclude' => true,
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.FULL_TIME',
                    'FULL_TIME'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.PART_TIME',
                    'PART_TIME'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.CONTRACTOR',
                    'CONTRACTOR'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.TEMPORARY',
                    'TEMPORARY'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.INTERN',
                    'INTERN'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.VOLUNTEER',
                    'VOLUNTEER'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.PER_DIEM',
                    'PER_DIEM'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.OTHER',
                    'OTHER'
                ]
            ],
            'default' => 'FULL_TIME'
        ]
    ],
    'tx_dmschema_hiring_organization_name' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_hiring_organization_name',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_hiring_organization_same_as' => [
        'exclude' => true,
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_hiring_organization_same_as',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    ],
                ],
            ],
            'softref' => 'typolink'
        ]
    ],
    'tx_dmschema_hiring_organization_logo' => [
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_hiring_organization_logo',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('tx_dmschema_hiring_organization_logo', [
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
            ],
            // custom configuration for displaying fields in the overlay/reference table
            // to use the imageoverlayPalette instead of the basicoverlayPalette
            'overrideChildTca' => [
                'types' => [
                    '0' => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ]
                ],
            ],
        ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
    ],
    'tx_dmschema_job_location_place_street_address' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_job_location_place_street_address',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_job_location_place_address_locality' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_job_location_place_address_locality',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_job_location_place_address_region' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_job_location_place_address_region',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_job_location_place_postal_code' => [
        'exclude' => true,
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_job_location_place_postal_code',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 5,
            'eval' => 'int,required',
        ]
    ],
    'tx_dmschema_job_location_place_address_country' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_job_location_place_address_country',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_base_salary_currency' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_base_salary_currency',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        ],
    ],
    'tx_dmschema_base_salary_value_min' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_base_salary_value_min',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'range' => [
                'lower' => 0,
            ],
            'eval' => 'int,required',
        ]
    ],
    'tx_dmschema_base_salary_value_max' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_base_salary_value_max',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'range' => [
                'lower' => 0,
            ],
            'eval' => 'int,required',
        ]
    ],
    'tx_dmschema_base_salary_value_unit' => [
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_base_salary_value_unit',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.HOUR',
                    'HOUR'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.DAY',
                    'DAY'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.WEEK',
                    'WEEK'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.MONTH',
                    'MONTH'
                ],
                [
                    'LLL:EXT:'.$llFile.':dm_schema.tca.tx_dmschema_employment_type.YEAR',
                    'YEAR'
                ]
            ],
            'default' => 'MONTH'
        ]
    ],
]);
