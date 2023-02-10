<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Mindshape\MindshapeCookieHint\Controller\MainController;
if(!defined('TYPO3')) {
	die('Access denied.');
}

ExtensionUtility::configurePlugin(
	'MindshapeCookieHint',
	'Main',
	[MainController::class => 'cookie'],
	// non-cacheable actions
	[]
);
