<?php
namespace Xenio\Seenwanderung\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 
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
 * Test case for class Xenio\Seenwanderung\Controller\HikerController.
 *
 */
class HikerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Xenio\Seenwanderung\Controller\HikerController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Xenio\\Seenwanderung\\Controller\\HikerController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllHikersFromRepositoryAndAssignsThemToView() {

		$allHikers = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$hikerRepository = $this->getMock('Xenio\\Seenwanderung\\Domain\\Repository\\HikerRepository', array('findAll'), array(), '', FALSE);
		$hikerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allHikers));
		$this->inject($this->subject, 'hikerRepository', $hikerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('hikers', $allHikers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenHikerToView() {
		$hiker = new \Xenio\Seenwanderung\Domain\Model\Hiker();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('hiker', $hiker);

		$this->subject->showAction($hiker);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenHikerToView() {
		$hiker = new \Xenio\Seenwanderung\Domain\Model\Hiker();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newHiker', $hiker);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($hiker);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenHikerToHikerRepository() {
		$hiker = new \Xenio\Seenwanderung\Domain\Model\Hiker();

		$hikerRepository = $this->getMock('Xenio\\Seenwanderung\\Domain\\Repository\\HikerRepository', array('add'), array(), '', FALSE);
		$hikerRepository->expects($this->once())->method('add')->with($hiker);
		$this->inject($this->subject, 'hikerRepository', $hikerRepository);

		$this->subject->createAction($hiker);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenHikerToView() {
		$hiker = new \Xenio\Seenwanderung\Domain\Model\Hiker();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('hiker', $hiker);

		$this->subject->editAction($hiker);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenHikerInHikerRepository() {
		$hiker = new \Xenio\Seenwanderung\Domain\Model\Hiker();

		$hikerRepository = $this->getMock('Xenio\\Seenwanderung\\Domain\\Repository\\HikerRepository', array('update'), array(), '', FALSE);
		$hikerRepository->expects($this->once())->method('update')->with($hiker);
		$this->inject($this->subject, 'hikerRepository', $hikerRepository);

		$this->subject->updateAction($hiker);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenHikerFromHikerRepository() {
		$hiker = new \Xenio\Seenwanderung\Domain\Model\Hiker();

		$hikerRepository = $this->getMock('Xenio\\Seenwanderung\\Domain\\Repository\\HikerRepository', array('remove'), array(), '', FALSE);
		$hikerRepository->expects($this->once())->method('remove')->with($hiker);
		$this->inject($this->subject, 'hikerRepository', $hikerRepository);

		$this->subject->deleteAction($hiker);
	}
}
