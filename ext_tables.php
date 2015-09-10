<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Seenwanderungform',
	'7 Wanderung Form'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', '7 Seen Wanderung');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_hiker', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_hiker.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_hiker');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_hiker'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hiker',
		'label' => 'sex',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'sex,first_name,last_name,birthday,street,street_number,zip,city,hiking_route,vehicle,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Hiker.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_hiker.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_hikingroute', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_hikingroute.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_hikingroute');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_hikingroute'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_hikingroute',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,code,date,weburl,capacity,note,fee,fee_sparkasse,online_buchung,waypoint_group_id,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/HikingRoute.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_hikingroute.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_waypointgroup', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_waypointgroup.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_waypointgroup');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_waypointgroup'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_waypointgroup',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,stages,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/WaypointGroup.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_waypointgroup.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_stage', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_stage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_stage');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_stage'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_stage',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,distance_to_prev,start,finish,control,drink,food,waypoint,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Stage.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_stage.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_waypoint', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_waypoint.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_waypoint');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_waypoint'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_waypoint',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Waypoint.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_waypoint.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_vehicle', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_vehicle.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_vehicle');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_vehicle'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_vehicle',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,capacity,vehicle_station,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Vehicle.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_vehicle.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_seenwanderung_domain_model_vehiclestation', 'EXT:seenwanderung/Resources/Private/Language/locallang_csh_tx_seenwanderung_domain_model_vehiclestation.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_seenwanderung_domain_model_vehiclestation');
$GLOBALS['TCA']['tx_seenwanderung_domain_model_vehiclestation'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:seenwanderung/Resources/Private/Language/locallang_db.xlf:tx_seenwanderung_domain_model_vehiclestation',
		'label' => 'departure_time',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'departure_time,arrival_time,waypoint,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/VehicleStation.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_seenwanderung_domain_model_vehiclestation.gif'
	),
);
