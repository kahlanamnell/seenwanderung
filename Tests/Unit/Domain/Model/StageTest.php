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
 * Test case for class \Xenio\Seenwanderung\Domain\Model\Stage.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class StageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Xenio\Seenwanderung\Domain\Model\Stage
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Xenio\Seenwanderung\Domain\Model\Stage();
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
	public function getDistanceToPrevReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDistanceToPrev()
		);
	}

	/**
	 * @test
	 */
	public function setDistanceToPrevForStringSetsDistanceToPrev() {
		$this->subject->setDistanceToPrev('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'distanceToPrev',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStartReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getStart()
		);
	}

	/**
	 * @test
	 */
	public function setStartForBooleanSetsStart() {
		$this->subject->setStart(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'start',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFinishReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getFinish()
		);
	}

	/**
	 * @test
	 */
	public function setFinishForBooleanSetsFinish() {
		$this->subject->setFinish(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'finish',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getControlReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getControl()
		);
	}

	/**
	 * @test
	 */
	public function setControlForBooleanSetsControl() {
		$this->subject->setControl(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'control',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDrinkReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getDrink()
		);
	}

	/**
	 * @test
	 */
	public function setDrinkForBooleanSetsDrink() {
		$this->subject->setDrink(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'drink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFoodReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getFood()
		);
	}

	/**
	 * @test
	 */
	public function setFoodForBooleanSetsFood() {
		$this->subject->setFood(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'food',
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
