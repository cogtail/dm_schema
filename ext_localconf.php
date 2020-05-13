<?php
defined('TYPO3_MODE') || die();

// Register for hooks to show previews of tt_content element of CType="your_contentelement" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['dm_schema'] = \DieMedialen\DmSchema\Hooks\PageLayoutView\PageLayoutViewDrawItem::class;
