<?php

defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Backend\Form\Element\ImageManipulationElement::class] = [
    'className' => Inscript\Imagemod\Xclass\ImageManipulationElement::class
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Backend\Controller\Wizard\ImageManipulationController::class] = [
    'className' => Inscript\Imagemod\Xclass\ImageManipulationController::class
];

if (TYPO3_MODE === "BE" )   {
    $pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
    $pageRenderer->loadRequireJsModule(
        'TYPO3/CMS/Imagemod/ImageModification',
        'function(ImageModification) { ImageModification.setTYPO3Version(' . \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) . ');}'
    );
}
