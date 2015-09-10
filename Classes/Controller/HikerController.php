<?php
namespace Xenio\Seenwanderung\Controller;


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
 * HikerController
 */
class HikerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * hikerRepository
	 *
	 * @var \Xenio\Seenwanderung\Domain\Repository\HikerRepository
	 * @inject
	 */
	protected $hikerRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$hikers = $this->hikerRepository->findAll();
		$this->view->assign('hikers', $hikers);
	}

	/**
	 * action show
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Hiker $hiker
	 * @return void
	 */
	public function showAction(\Xenio\Seenwanderung\Domain\Model\Hiker $hiker) {
		$this->view->assign('hiker', $hiker);
	}

	/**
	 * action new
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Hiker $newHiker
	 * @ignorevalidation $newHiker
	 * @return void
	 */
	public function newAction(\Xenio\Seenwanderung\Domain\Model\Hiker $newHiker = NULL) {
		$this->view->assign('newHiker', $newHiker);
	}

	/**
	 * action create
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Hiker $newHiker
	 * @return void
	 */
	public function createAction(\Xenio\Seenwanderung\Domain\Model\Hiker $newHiker) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->hikerRepository->add($newHiker);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Hiker $hiker
	 * @ignorevalidation $hiker
	 * @return void
	 */
	public function editAction(\Xenio\Seenwanderung\Domain\Model\Hiker $hiker) {
		$this->view->assign('hiker', $hiker);
	}

	/**
	 * action update
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Hiker $hiker
	 * @return void
	 */
	public function updateAction(\Xenio\Seenwanderung\Domain\Model\Hiker $hiker) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->hikerRepository->update($hiker);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Hiker $hiker
	 * @return void
	 */
	public function deleteAction(\Xenio\Seenwanderung\Domain\Model\Hiker $hiker) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->hikerRepository->remove($hiker);
		$this->redirect('list');
	}

	/**
	 * action
	 *
	 * @return void
	 */
	public function Action() {
		
	}

}