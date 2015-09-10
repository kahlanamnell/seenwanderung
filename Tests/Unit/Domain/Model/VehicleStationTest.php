<?php

namespace Xenio\Seenwanderung\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Xenio\Seenwanderung\Domain\Model\VehicleStation.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class VehicleStationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Xenio\Seenwanderung\Domain\Model\VehicleStation
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Xenio\Seenwanderung\Domain\Model\VehicleStation();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getArrivalTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getArrivalTime()
		);
	}

	/**
	 * @test
	 */
	public function setArrivalTimeForDateTimeSetsArrivalTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setArrivalTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'arrivalTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDepartureTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDepartureTime()
		);
	}

	/**
	 * @test
	 */
	public function setDepartureTimeForDateTimeSetsDepartureTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDepartureTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'departureTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWaypointReturnsInitialValueForWaypoint() {
		$this->assertEquals(
			NULL,
			$this->subject->getWaypoint()
		);
	}

	/**
	 * @test
	 */
	public function setWaypointForWaypointSetsWaypoint() {
		$waypointFixture = new \Xenio\Seenwanderung\Domain\Model\Waypoint();
		$this->subject->setWaypoint($waypointFixture);

		$this->assertAttributeEquals(
			$waypointFixture,
			'waypoint',
			$this->subject
		);
	}
}
