<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['getData'][$_EXTKEY] =
    \Nemo64\CanonicalUrl\Hook\CanonicalParametersGetDataHook::class;