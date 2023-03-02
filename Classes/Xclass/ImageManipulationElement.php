<?php
declare(strict_types=1);

namespace Inscript\Imagemod\Xclass;

use TYPO3\CMS\Backend\Form\NodeFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

class ImageManipulationElement extends \TYPO3\CMS\Backend\Form\Element\ImageManipulationElement
{
    public function __construct(NodeFactory $nodeFactory, array $data)
    {
        parent::__construct($nodeFactory, $data);
        $this->templateView->setLayoutRootPaths(array_merge(
            $this->templateView->getLayoutRootPaths(),
            [GeneralUtility::getFileAbsFileName('EXT:imagemod/Resources/Private/Layouts/')]
        ));
        $this->templateView->setPartialRootPaths(array_merge(
            $this->templateView->getPartialRootPaths(),
            [GeneralUtility::getFileAbsFileName('EXT:imagemod/Resources/Private/Partials/ImageManipulation/')]
        ));

        $this->templateView->setTemplatePathAndFilename(
            GeneralUtility::getFileAbsFileName(
                'EXT:imagemod/Resources/Private/Templates/ImageManipulation/' . $this->getTemplateName()
            )
        );
    }

    protected function getTemplateName(): string
    {
        return VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) < 11000000
            ? 'ImageManipulationElement_v10.html'
            : 'ImageManipulationElement.html';
    }
}
