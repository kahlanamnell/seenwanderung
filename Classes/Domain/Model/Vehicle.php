<?php
namespace Xenio\Seenwanderung\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Vehicle
 */
class Vehicle extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * capacity
	 *
	 * @var integer
	 */
	protected $capacity = 0;

	/**
	 * vehicleStation
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xenio\Seenwanderung\Domain\Model\VehicleStation>
	 */
	protected $vehicleStation = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->vehicleStation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the capacity
	 *
	 * @return integer $capacity
	 */
	public function getCapacity() {
		return $this->capacity;
	}

	/**
	 * Sets the capacity
	 *
	 * @param integer $capacity
	 * @return void
	 */
	public function setCapacity($capacity) {
		$this->capacity = $capacity;
	}

	/**
	 * Adds a VehicleStation
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\VehicleStation $vehicleStation
	 * @return void
	 */
	public function addVehicleStation(\Xenio\Seenwanderung\Domain\Model\VehicleStation $vehicleStation) {
		$this->vehicleStation->attach($vehicleStation);
	}

	/**
	 * Removes a VehicleStation
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\VehicleStation $vehicleStationToRemove The VehicleStation to be removed
	 * @return void
	 */
	public function removeVehicleStation(\Xenio\Seenwanderung\Domain\Model\VehicleStation $vehicleStationToRemove) {
		$this->vehicleStation->detach($vehicleStationToRemove);
	}

	/**
	 * Returns the vehicleStation
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xenio\Seenwanderung\Domain\Model\VehicleStation> $vehicleStation
	 */
	public function getVehicleStation() {
		return $this->vehicleStation;
	}

	/**
	 * Sets the vehicleStation
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xenio\Seenwanderung\Domain\Model\VehicleStation> $vehicleStation
	 * @return void
	 */
	public function setVehicleStation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $vehicleStation) {
		$this->vehicleStation = $vehicleStation;
	}

}