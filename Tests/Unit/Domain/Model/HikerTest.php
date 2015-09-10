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
 * Test case for class \Xenio\Seenwanderung\Domain\Model\Hiker.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class HikerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Xenio\Seenwanderung\Domain\Model\Hiker
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Xenio\Seenwanderung\Domain\Model\Hiker();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getSexReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getSex()
		);
	}

	/**
	 * @test
	 */
	public function setSexForIntegerSetsSex() {
		$this->subject->setSex(12);

		$this->assertAttributeEquals(
			12,
			'sex',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFirstName()
		);
	}

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() {
		$this->subject->setFirstName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'firstName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLastName()
		);
	}

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() {
		$this->subject->setLastName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBirthdayReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getBirthday()
		);
	}

	/**
	 * @test
	 */
	public function setBirthdayForDateTimeSetsBirthday() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setBirthday($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'birthday',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet()
		);
	}

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet() {
		$this->subject->setStreet('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetNumberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreetNumber()
		);
	}

	/**
	 * @test
	 */
	public function setStreetNumberForStringSetsStreetNumber() {
		$this->subject->setStreetNumber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'streetNumber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZip()
		);
	}

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() {
		$this->subject->setZip('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zip',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() {
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHikingRouteReturnsInitialValueForHikingRoute() {
		$this->assertEquals(
			NULL,
			$this->subject->getHikingRoute()
		);
	}

	/**
	 * @test
	 */
	public function setHikingRouteForHikingRouteSetsHikingRoute() {
		$hikingRouteFixture = new \Xenio\Seenwanderung\Domain\Model\HikingRoute();
		$this->subject->setHikingRoute($hikingRouteFixture);

		$this->assertAttributeEquals(
			$hikingRouteFixture,
			'hikingRoute',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVehicleReturnsInitialValueForVehicle() {
		$this->assertEquals(
			NULL,
			$this->subject->getVehicle()
		);
	}

	/**
	 * @test
	 */
	public function setVehicleForVehicleSetsVehicle() {
		$vehicleFixture = new \Xenio\Seenwanderung\Domain\Model\Vehicle();
		$this->subject->setVehicle($vehicleFixture);

		$this->assertAttributeEquals(
			$vehicleFixture,
			'vehicle',
			$this->subject
		);
	}
}
