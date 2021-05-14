<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:yord/Configuration/TSconfig/Page">');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Nogue.yord',
    'ContentElements',
    [
        'ContentElement' => 'render'
    ],
    []
);