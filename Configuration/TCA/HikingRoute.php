<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_seenwanderung_domain_model_hikingroute'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_seenwanderung_domain_model_hikingroute']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, code, date, weburl, capacity, note, fee, fee_sparkasse, online_buchung, waypoint_group_id',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, code, date, weburl, capacity, note;;;richtext:rte_transform[mode=ts_links], fee, fee_sparkasse, online_buchung, waypoint_group_id, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_seenwanderung_domain_model_hikingroute',
				'foreign_table_where' => 'AND tx_seenwanderung_domain_model_hikingroute.pid=###CURRENT_PID### AND tx_seenwanderung_domain_model_hikingroute.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.code',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.date',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'weburl' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.weburl',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'capacity' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.capacity',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'note' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.note',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'fee' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.fee',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'fee_sparkasse' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.fee_sparkasse',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'online_buchung' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.online_buchung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'waypoint_group_id' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute.waypoint_group_id',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_seenwanderung_domain_model_waypointgroup',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);
