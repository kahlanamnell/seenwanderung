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
 * Stage
 */
class Stage extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * distanceToPrev
	 *
	 * @var string
	 */
	protected $distanceToPrev = '';

	/**
	 * start
	 *
	 * @var boolean
	 */
	protected $start = FALSE;

	/**
	 * finish
	 *
	 * @var boolean
	 */
	protected $finish = FALSE;

	/**
	 * control
	 *
	 * @var boolean
	 */
	protected $control = FALSE;

	/**
	 * drink
	 *
	 * @var boolean
	 */
	protected $drink = FALSE;

	/**
	 * food
	 *
	 * @var boolean
	 */
	protected $food = FALSE;

	/**
	 * waypoint
	 *
	 * @var \Xenio\Seenwanderung\Domain\Model\Waypoint
	 */
	protected $waypoint = NULL;

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
	 * Returns the distanceToPrev
	 *
	 * @return string $distanceToPrev
	 */
	public function getDistanceToPrev() {
		return $this->distanceToPrev;
	}

	/**
	 * Sets the distanceToPrev
	 *
	 * @param string $distanceToPrev
	 * @return void
	 */
	public function setDistanceToPrev($distanceToPrev) {
		$this->distanceToPrev = $distanceToPrev;
	}

	/**
	 * Returns the start
	 *
	 * @return boolean $start
	 */
	public function getStart() {
		return $this->start;
	}

	/**
	 * Sets the start
	 *
	 * @param boolean $start
	 * @return void
	 */
	public function setStart($start) {
		$this->start = $start;
	}

	/**
	 * Returns the boolean state of start
	 *
	 * @return boolean
	 */
	public function isStart() {
		return $this->start;
	}

	/**
	 * Returns the finish
	 *
	 * @return boolean $finish
	 */
	public function getFinish() {
		return $this->finish;
	}

	/**
	 * Sets the finish
	 *
	 * @param boolean $finish
	 * @return void
	 */
	public function setFinish($finish) {
		$this->finish = $finish;
	}

	/**
	 * Returns the boolean state of finish
	 *
	 * @return boolean
	 */
	public function isFinish() {
		return $this->finish;
	}

	/**
	 * Returns the control
	 *
	 * @return boolean $control
	 */
	public function getControl() {
		return $this->control;
	}

	/**
	 * Sets the control
	 *
	 * @param boolean $control
	 * @return void
	 */
	public function setControl($control) {
		$this->control = $control;
	}

	/**
	 * Returns the boolean state of control
	 *
	 * @return boolean
	 */
	public function isControl() {
		return $this->control;
	}

	/**
	 * Returns the drink
	 *
	 * @return boolean $drink
	 */
	public function getDrink() {
		return $this->drink;
	}

	/**
	 * Sets the drink
	 *
	 * @param boolean $drink
	 * @return void
	 */
	public function setDrink($drink) {
		$this->drink = $drink;
	}

	/**
	 * Returns the boolean state of drink
	 *
	 * @return boolean
	 */
	public function isDrink() {
		return $this->drink;
	}

	/**
	 * Returns the food
	 *
	 * @return boolean $food
	 */
	public function getFood() {
		return $this->food;
	}

	/**
	 * Sets the food
	 *
	 * @param boolean $food
	 * @return void
	 */
	public function setFood($food) {
		$this->food = $food;
	}

	/**
	 * Returns the boolean state of food
	 *
	 * @return boolean
	 */
	public function isFood() {
		return $this->food;
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