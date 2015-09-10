<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_seenwanderung_domain_model_stage'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_seenwanderung_domain_model_stage']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, distance_to_prev, start, finish, control, drink, food, waypoint',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, distance_to_prev, start, finish, control, drink, food, waypoint, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_seenwanderung_domain_model_stage',
				'foreign_table_where' => 'AND tx_seenwanderung_domain_model_stage.pid=###CURRENT_PID### AND tx_seenwanderung_domain_model_stage.sys_language_uid IN (-1,0)',
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

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'distance_to_prev' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.distance_to_prev',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'start' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.start',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'finish' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.finish',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'control' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.control',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'drink' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.drink',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'food' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.food',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'waypoint' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage.waypoint',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_seenwanderung_domain_model_waypoint',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);
