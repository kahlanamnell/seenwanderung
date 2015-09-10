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
 * WaypointGroup
 */
class WaypointGroup extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * Stages
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xenio\Seenwanderung\Domain\Model\Stage>
	 */
	protected $stages = NULL;

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
		$this->stages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Adds a Stage
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Stage $stage
	 * @return void
	 */
	public function addStage(\Xenio\Seenwanderung\Domain\Model\Stage $stage) {
		$this->stages->attach($stage);
	}

	/**
	 * Removes a Stage
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Stage $stageToRemove The Stage to be removed
	 * @return void
	 */
	public function removeStage(\Xenio\Seenwanderung\Domain\Model\Stage $stageToRemove) {
		$this->stages->detach($stageToRemove);
	}

	/**
	 * Returns the stages
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xenio\Seenwanderung\Domain\Model\Stage> $stages
	 */
	public function getStages() {
		return $this->stages;
	}

	/**
	 * Sets the stages
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Xenio\Seenwanderung\Domain\Model\Stage> $stages
	 * @return void
	 */
	public function setStages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $stages) {
		$this->stages = $stages;
	}

}