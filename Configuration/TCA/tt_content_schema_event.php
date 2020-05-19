<?php

defined('TYPO3_MODE') || die();

if (!is_array($GLOBALS['TCA']['tt_content']['types']['dm_schema_event'])) {
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_event'] = [];
}

$llFile = 'dm_schema/Resources/Private/Language/locallang_be.xlf';

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:'.$llFile.':dm_schema_event.title',
        'dm_schema_event',
        'content-special-html'
    ]
);

$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_event'] =
    [
        'showitem' => ' tx_dmschema_title,--linebreak--,
                        tx_dmschema_description,--linebreak--,
                        tx_dmschema_starttime,tx_dmschema_endtime,--linebreak--,
                        tx_dmschema_event_image,--linebreak--,'
    ];

$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_event_location'] =
    [
        'showitem' => ' tx_dmschema_location_name,--linebreak--,
                        tx_dmschema_address_street_address,--linebreak--,
                        tx_dmschema_address_postal_code,
                        tx_dmschema_address_address_locality,--linebreak--,
                        tx_dmschema_address_address_region,
                        tx_dmschema_address_address_country,
                        '
    ];
/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['dm_schema_event'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_event'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_event;dm_schema_event,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_event_location;dm_schema_event_location,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
        ',
        'columnsOverrides' => [
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
            'tx_dmschema_starttime' => [
                'config' => [
                    'eval' => 'datetime,int,required',
                    'default' => null
                ],
            ],
        ]
    ]
);
