<?php
namespace DieMedialen\DmSchema\Hooks\PageLayoutView;

/**
 * Contains a preview rendering for all dm_schema content-elements
 */
class PageLayoutViewDrawItem implements \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface
{
    /**
     * @var array
     */
    protected $supportedContentTypes = array (
        0 => 'dm_schema_faq',
    );

    /**
     * Preprocesses the preview rendering of a content element of type "textmedia"
     *
     * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
     * @param bool $drawItem Whether to draw the item using the default functionality
     * @param string $headerContent Header content
     * @param string $itemContent Item content
     * @param array $row Record row of tt_content
     */
    public function preProcess(
        \TYPO3\CMS\Backend\View\PageLayoutView &$parentObject,
        &$drawItem,
        &$headerContent,
        &$itemContent,
        array &$row
    ) {
        if (!in_array($row['CType'], $this->supportedContentTypes, true)) {
            return;
        }
        $headerContent = null;


//        $contentType = $parentObject->CType_labels[$row['CType']];
//
//        if (isset($contentType)) {
//            $oldHeaderContent = $headerContent;
//            $headerContent = "<strong>" . $contentType . "</strong><br /><br />" . $oldHeaderContent;
//        }
//
//        if ($row['assets']) {
//            $itemContent .= $parentObject->linkEditContent($parentObject->getThumbCodeUnlinked($row, 'tt_content', 'assets'), $row) . '<br />';
//
//            $fileReferences = \TYPO3\CMS\Backend\Utility\BackendUtility::resolveFileReferences('tt_content', 'assets', $row);
//
//            if (!empty($fileReferences)) {
//                $linkedContent = '<br />';
//                $imageCounter = 1;
//
//                foreach ($fileReferences as $fileReference) {
//                    $description = $fileReference->getDescription();
//                    $alternative = $fileReference->getAlternative();
//                    $title = $fileReference->getTitle();
//
//                    $linkedContent .= "<br /><strong>Bild " . $imageCounter . ":</strong><br />";
//
//                    if ($description !== null && $description !== '') {
//                        $linkedContent .= "Description:" . htmlspecialchars($description) . '<br />';
//                    }
//
//                    if ($alternative !== null && $alternative !== '') {
//                        $linkedContent .= "Alt:" . htmlspecialchars($alternative) . '<br />';
//                    } else {
//                        $linkedContent .= "Alt: <span style=\"color:red;\">Not set !</span><br />";
//                    }
//
//                    if ($title !== null && $title !== '') {
//                        $linkedContent .= "Title:" . htmlspecialchars($title) . '<br />';
//                    } else {
//                        $linkedContent .= "Title: <span style=\"color:red;\">Not set !</span><br />";
//                    }
//
//                    $imageCounter++;
//                }
//
//                $itemContent .= $parentObject->linkEditContent($linkedContent, $row);
//
//                unset($linkedContent);
//            }
//        }
//
//        $drawItem = false;
    }
}
