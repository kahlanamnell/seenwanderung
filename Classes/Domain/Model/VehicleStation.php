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
 * VehicleStation
 */
class VehicleStation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * departureTime
	 *
	 * @var \DateTime
	 */
	protected $departureTime = NULL;

	/**
	 * arrivalTime
	 *
	 * @var \DateTime
	 */
	protected $arrivalTime = NULL;

	/**
	 * waypoint
	 *
	 * @var \Xenio\Seenwanderung\Domain\Model\Waypoint
	 */
	protected $waypoint = NULL;

	/**
	 * Returns the departureTime
	 *
	 * @return \DateTime $departureTime
	 */
	public function getDepartureTime() {
		return $this->departureTime;
	}

	/**
	 * Sets the departureTime
	 *
	 * @param \DateTime $departureTime
	 * @return void
	 */
	public function setDepartureTime(\DateTime $departureTime) {
		$this->departureTime = $departureTime;
	}

	/**
	 * Returns the arrivalTime
	 *
	 * @return \DateTime $arrivalTime
	 */
	public function getArrivalTime() {
		return $this->arrivalTime;
	}

	/**
	 * Sets the arrivalTime
	 *
	 * @param \DateTime $arrivalTime
	 * @return void
	 */
	public function setArrivalTime(\DateTime $arrivalTime) {
		$this->arrivalTime = $arrivalTime;
	}

	/**
	 * Returns the waypoint
	 *
	 * @return \Xenio\Seenwanderung\Domain\Model\Waypoint $waypoint
	 */
	public function getWaypoint() {
		return $this->waypoint;
	}

	/**
	 * Sets the waypoint
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Waypoint $waypoint
	 * @return void
	 */
	public function setWaypoint(\Xenio\Seenwanderung\Domain\Model\Waypoint $waypoint) {
		$this->waypoint = $waypoint;
	}

}