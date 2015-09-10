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
 * Test case for class \Xenio\Seenwanderung\Domain\Model\WaypointGroup.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class WaypointGroupTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Xenio\Seenwanderung\Domain\Model\WaypointGroup
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Xenio\Seenwanderung\Domain\Model\WaypointGroup();
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
	public function getStagesReturnsInitialValueForStage() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getStages()
		);
	}

	/**
	 * @test
	 */
	public function setStagesForObjectStorageContainingStageSetsStages() {
		$stage = new \Xenio\Seenwanderung\Domain\Model\Stage();
		$objectStorageHoldingExactlyOneStages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneStages->attach($stage);
		$this->subject->setStages($objectStorageHoldingExactlyOneStages);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneStages,
			'stages',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addStageToObjectStorageHoldingStages() {
		$stage = new \Xenio\Seenwanderung\Domain\Model\Stage();
		$stagesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$stagesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($stage));
		$this->inject($this->subject, 'stages', $stagesObjectStorageMock);

		$this->subject->addStage($stage);
	}

	/**
	 * @test
	 */
	public function removeStageFromObjectStorageHoldingStages() {
		$stage = new \Xenio\Seenwanderung\Domain\Model\Stage();
		$stagesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$stagesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($stage));
		$this->inject($this->subject, 'stages', $stagesObjectStorageMock);

		$this->subject->removeStage($stage);

	}
}
