<?php

defined('TYPO3_MODE') || die();

if (!is_array($GLOBALS['TCA']['tt_content']['types']['dm_schema_localbusiness'])) {
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_localbusiness'] = [];
}

$llFile = 'dm_schema/Resources/Private/Language/locallang_be.xlf';

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:'.$llFile.':dm_schema_localbusiness.title',
        'dm_schema_localbusiness',
        'content-special-html'
    ]
);

$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_localbusiness'] =
    [
        'showitem' => ' tx_dmschema_title,--linebreak--,
                        tx_dmschema_id,tx_dmschema_url,--linebreak--,
                        tx_dmschema_geo_latitude,tx_dmschema_geo_longitude,--linebreak--,
                        tx_dmschema_telephone,--linebreak--,
                        tx_dmschema_localbusiness_image,--linebreak--,'
    ];
$GLOBALS['TCA']['tt_content']['palettes']['dm_schema_localbusiness_location'] =
    [
        'showitem' => ' tx_dmschema_address_street_address,--linebreak--,
                        tx_dmschema_address_postal_code,
                        tx_dmschema_address_address_locality,--linebreak--,
                        tx_dmschema_address_address_region,
                        tx_dmschema_address_address_country,
                        '
    ];

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['dm_schema_localbusiness'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_localbusiness'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_localbusiness;dm_schema_localbusiness,
                --palette--;LLL:EXT:'.$llFile.':dm_schema.palette.dm_schema_localbusiness_location;dm_schema_localbusiness_location,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        '
    ]
);
