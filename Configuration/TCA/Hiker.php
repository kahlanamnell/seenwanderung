<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_seenwanderung_domain_model_hiker'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_seenwanderung_domain_model_hiker']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sex, first_name, last_name, birthday, street, street_number, zip, city, hiking_route, vehicle',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, sex, first_name, last_name, birthday, street, street_number, zip, city, hiking_route, vehicle, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_seenwanderung_domain_model_hiker',
				'foreign_table_where' => 'AND tx_seenwanderung_domain_model_hiker.pid=###CURRENT_PID### AND tx_seenwanderung_domain_model_hiker.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'sex' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.sex',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'first_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.first_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'last_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'birthday' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.birthday',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'street' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.street',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'street_number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.street_number',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.zip',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'hiking_route' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.hiking_route',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_seenwanderung_domain_model_hikingroute',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'vehicle' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker.vehicle',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_seenwanderung_domain_model_vehicle',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);
