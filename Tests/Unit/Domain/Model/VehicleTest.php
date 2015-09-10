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
 * Test case for class \Xenio\Seenwanderung\Domain\Model\Vehicle.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class VehicleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Xenio\Seenwanderung\Domain\Model\Vehicle
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Xenio\Seenwanderung\Domain\Model\Vehicle();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCapacityReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getCapacity()
		);
	}

	/**
	 * @test
	 */
	public function setCapacityForIntegerSetsCapacity() {
		$this->subject->setCapacity(12);

		$this->assertAttributeEquals(
			12,
			'capacity',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVehicleStationReturnsInitialValueForVehicleStation() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getVehicleStation()
		);
	}

	/**
	 * @test
	 */
	public function setVehicleStationForObjectStorageContainingVehicleStationSetsVehicleStation() {
		$vehicleStation = new \Xenio\Seenwanderung\Domain\Model\VehicleStation();
		$objectStorageHoldingExactlyOneVehicleStation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneVehicleStation->attach($vehicleStation);
		$this->subject->setVehicleStation($objectStorageHoldingExactlyOneVehicleStation);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneVehicleStation,
			'vehicleStation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addVehicleStationToObjectStorageHoldingVehicleStation() {
		$vehicleStation = new \Xenio\Seenwanderung\Domain\Model\VehicleStation();
		$vehicleStationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$vehicleStationObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($vehicleStation));
		$this->inject($this->subject, 'vehicleStation', $vehicleStationObjectStorageMock);

		$this->subject->addVehicleStation($vehicleStation);
	}

	/**
	 * @test
	 */
	public function removeVehicleStationFromObjectStorageHoldingVehicleStation() {
		$vehicleStation = new \Xenio\Seenwanderung\Domain\Model\VehicleStation();
		$vehicleStationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$vehicleStationObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($vehicleStation));
		$this->inject($this->subject, 'vehicleStation', $vehicleStationObjectStorageMock);

		$this->subject->removeVehicleStation($vehicleStation);

	}
}
