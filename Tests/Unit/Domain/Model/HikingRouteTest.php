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
 * Test case for class \Xenio\Seenwanderung\Domain\Model\HikingRoute.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class HikingRouteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Xenio\Seenwanderung\Domain\Model\HikingRoute
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Xenio\Seenwanderung\Domain\Model\HikingRoute();
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
	public function getCodeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCode()
		);
	}

	/**
	 * @test
	 */
	public function setCodeForStringSetsCode() {
		$this->subject->setCode('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'code',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDate()
		);
	}

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeburlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWeburl()
		);
	}

	/**
	 * @test
	 */
	public function setWeburlForStringSetsWeburl() {
		$this->subject->setWeburl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'weburl',
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
	public function getNoteReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNote()
		);
	}

	/**
	 * @test
	 */
	public function setNoteForStringSetsNote() {
		$this->subject->setNote('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'note',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFeeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getFee()
		);
	}

	/**
	 * @test
	 */
	public function setFeeForFloatSetsFee() {
		$this->subject->setFee(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'fee',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getFeeSparkasseReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getFeeSparkasse()
		);
	}

	/**
	 * @test
	 */
	public function setFeeSparkasseForFloatSetsFeeSparkasse() {
		$this->subject->setFeeSparkasse(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'feeSparkasse',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getOnlineBuchungReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getOnlineBuchung()
		);
	}

	/**
	 * @test
	 */
	public function setOnlineBuchungForBooleanSetsOnlineBuchung() {
		$this->subject->setOnlineBuchung(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'onlineBuchung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWaypointGroupIdReturnsInitialValueForWaypointGroup() {
		$this->assertEquals(
			NULL,
			$this->subject->getWaypointGroupId()
		);
	}

	/**
	 * @test
	 */
	public function setWaypointGroupIdForWaypointGroupSetsWaypointGroupId() {
		$waypointGroupIdFixture = new \Xenio\Seenwanderung\Domain\Model\WaypointGroup();
		$this->subject->setWaypointGroupId($waypointGroupIdFixture);

		$this->assertAttributeEquals(
			$waypointGroupIdFixture,
			'waypointGroupId',
			$this->subject
		);
	}
}
