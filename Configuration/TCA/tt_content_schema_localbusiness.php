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


/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['dm_schema_localbusiness'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['dm_schema_localbusiness'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,bodytext,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        ',
        'columnsOverrides' => [
            'header' => [
                'label' => 'LLL:EXT:'.$llFile.':dm_schema_localbusiness.tca.question'
            ],
            'bodytext' => [
                'label' => 'LLL:EXT:'.$llFile.':dm_schema_localbusiness.tca.answer'
            ]
        ]
    ]
);
