<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
if(!defined('TYPO3')) {
	die('Access denied.');
}

// TypoScript
ExtensionManagementUtility::addStaticFile('mindshape_cookie_hint', 'Configuration/TypoScript', 'mindshape Cookie Hint');

// Plugin
ExtensionUtility::registerPlugin(
	'mindshape_cookie_hint',
	'Main',
	'Cookies'
);
