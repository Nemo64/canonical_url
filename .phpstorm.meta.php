<?php
namespace PHPSTORM_META;

# START OF Hn\Typo3Environment\Generator\PhpStormMetaGenerator
# THIS AREA IS AUTO GENERATED BY hauptsache/typo3-environment

// Hint that makeInstance will return an instance of the class it gets passed
override(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(0), type(0));

// Hint that object manager will return an instance of the class it gets passed
override(\TYPO3\CMS\Extbase\Object\ObjectManagerInterface::get(0), type(0));

// requires the deep-assoc-completion extension
$GLOBALS['TSFE'] = new \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController();
$GLOBALS['TYPO3_DB'] = new \TYPO3\CMS\Core\Database\DatabaseConnection();

# END OF Hn\Typo3Environment\Generator\PhpStormMetaGenerator