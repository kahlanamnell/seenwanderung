<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Xenio.' . $_EXTKEY,
	'Seenwanderungform',
	array(
		'Hiker' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Hiker' => 'create, update, delete, ',
		
	)
);
