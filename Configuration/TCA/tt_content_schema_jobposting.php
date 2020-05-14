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


/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['dm_schema_jobposting'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_jobposting'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                tx_dmschema_title,
                tx_dmschema_description,
                tx_dmschema_date_posted,
                tx_dmschema_valid_through,
                tx_dmschema_employment_type,
                tx_dmschema_hiring_organization_name,
                tx_dmschema_hiring_organization_same_as,
                tx_dmschema_hiring_organization_logo,
                tx_dmschema_job_location_place_street_address,
                tx_dmschema_job_location_place_address_locality,
                tx_dmschema_job_location_place_address_region,
                tx_dmschema_job_location_place_postal_code,
                tx_dmschema_job_location_place_address_country,
                tx_dmschema_base_salary_currency,
                tx_dmschema_base_salary_value_min,
                tx_dmschema_base_salary_value_max,
                tx_dmschema_base_salary_value_unit,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        '
    ]
);
