<?php

defined('TYPO3_MODE') || die();

if (!is_array($GLOBALS['TCA']['tt_content']['types']['dm_schema_jobposting'])) {
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_jobposting'] = [];
}

$llFile = 'dm_schema/Resources/Private/Language/locallang_be.xlf';

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:'.$llFile.':dm_schema_jobposting.title',
        'dm_schema_jobposting',
        'content-special-html'
    ]
);
$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_jobposting_header'] =
    [
        'showitem' => ' tx_dmschema_title,--linebreak--,
                        tx_dmschema_description,--linebreak--,
                        tx_dmschema_employment_type,--linebreak--,
                        tx_dmschema_date_posted,
                        tx_dmschema_valid_through,
                        '
    ];

$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_jobposting_hiring_organization'] =
    [
        'showitem' => ' tx_dmschema_hiring_organization_name,--linebreak--,
                        tx_dmschema_hiring_organization_same_as,--linebreak--,
                        tx_dmschema_hiring_organization_logo,
                        '
    ];

$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_jobposting_job_location'] =
    [
        'showitem' => ' tx_dmschema_address_street_address,--linebreak--,
                        tx_dmschema_address_postal_code,
                        tx_dmschema_address_address_locality,--linebreak--,
                        tx_dmschema_address_address_region,
                        tx_dmschema_address_address_country,
                        '
    ];

$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_jobposting_base_salary'] =
    [
        'showitem' => ' tx_dmschema_base_salary_value_min,
                        tx_dmschema_base_salary_value_max,--linebreak--,
                        tx_dmschema_base_salary_value_unit,
                        tx_dmschema_base_salary_currency,--linebreak--,
                        '
    ];

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['dm_schema_jobposting'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_jobposting'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_header;dm_schema_jobposting_header,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_hiring_organization;dm_schema_jobposting_hiring_organization,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_job_location;dm_schema_jobposting_job_location,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_base_salary;dm_schema_jobposting_base_salary,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
        ',
        'columnsOverrides' => [
            'tx_dmschema_date_posted' => [
                'config' => [
                    'eval' => 'datetime,int,required',
                    'default' => null
                ],
            ],
            'tx_dmschema_valid_through' => [
                'config' => [
                    'eval' => 'datetime,int,required',
                    'default' => null
                ],
            ],
            'tx_dmschema_hiring_organization_name' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_address_address_locality' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_address_address_country' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_address_postal_code' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_address_street_address' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_title' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_description' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_base_salary_value_min' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ],
            'tx_dmschema_base_salary_currency' => [
                'config' => [
                    'eval' => 'trim,required'
                ],
            ]
        ]
    ]
);
