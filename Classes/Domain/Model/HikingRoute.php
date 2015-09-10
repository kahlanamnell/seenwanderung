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
 * HikingRoute
 */
class HikingRoute extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * code
	 *
	 * @var string
	 */
	protected $code = '';

	/**
	 * date
	 *
	 * @var \DateTime
	 */
	protected $date = NULL;

	/**
	 * weburl
	 *
	 * @var string
	 */
	protected $weburl = '';

	/**
	 * capacity
	 *
	 * @var integer
	 */
	protected $capacity = 0;

	/**
	 * note
	 *
	 * @var string
	 */
	protected $note = '';

	/**
	 * fee
	 *
	 * @var float
	 */
	protected $fee = 0.0;

	/**
	 * feeSparkasse
	 *
	 * @var float
	 */
	protected $feeSparkasse = 0.0;

	/**
	 * onlineBuchung
	 *
	 * @var boolean
	 */
	protected $onlineBuchung = FALSE;

	/**
	 * waypointGroupId
	 *
	 * @var \Xenio\Seenwanderung\Domain\Model\WaypointGroup
	 */
	protected $waypointGroupId = NULL;

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
	 * Returns the code
	 *
	 * @return string $code
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Sets the code
	 *
	 * @param string $code
	 * @return void
	 */
	public function setCode($code) {
		$this->code = $code;
	}

	/**
	 * Returns the date
	 *
	 * @return \DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate(\DateTime $date) {
		$this->date = $date;
	}

	/**
	 * Returns the weburl
	 *
	 * @return string $weburl
	 */
	public function getWeburl() {
		return $this->weburl;
	}

	/**
	 * Sets the weburl
	 *
	 * @param string $weburl
	 * @return void
	 */
	public function setWeburl($weburl) {
		$this->weburl = $weburl;
	}

	/**
	 * Returns the capacity
	 *
	 * @return integer $capacity
	 */
	public function getCapacity() {
		return $this->capacity;
	}

	/**
	 * Sets the capacity
	 *
	 * @param integer $capacity
	 * @return void
	 */
	public function setCapacity($capacity) {
		$this->capacity = $capacity;
	}

	/**
	 * Returns the note
	 *
	 * @return string $note
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets the note
	 *
	 * @param string $note
	 * @return void
	 */
	public function setNote($note) {
		$this->note = $note;
	}

	/**
	 * Returns the fee
	 *
	 * @return float $fee
	 */
	public function getFee() {
		return $this->fee;
	}

	/**
	 * Sets the fee
	 *
	 * @param float $fee
	 * @return void
	 */
	public function setFee($fee) {
		$this->fee = $fee;
	}

	/**
	 * Returns the feeSparkasse
	 *
	 * @return float $feeSparkasse
	 */
	public function getFeeSparkasse() {
		return $this->feeSparkasse;
	}

	/**
	 * Sets the feeSparkasse
	 *
	 * @param float $feeSparkasse
	 * @return void
	 */
	public function setFeeSparkasse($feeSparkasse) {
		$this->feeSparkasse = $feeSparkasse;
	}

	/**
	 * Returns the onlineBuchung
	 *
	 * @return boolean $onlineBuchung
	 */
	public function getOnlineBuchung() {
		return $this->onlineBuchung;
	}

	/**
	 * Sets the onlineBuchung
	 *
	 * @param boolean $onlineBuchung
	 * @return void
	 */
	public function setOnlineBuchung($onlineBuchung) {
		$this->onlineBuchung = $onlineBuchung;
	}

	/**
	 * Returns the boolean state of onlineBuchung
	 *
	 * @return boolean
	 */
	public function isOnlineBuchung() {
		return $this->onlineBuchung;
	}

	/**
	 * Returns the waypointGroupId
	 *
	 * @return \Xenio\Seenwanderung\Domain\Model\WaypointGroup $waypointGroupId
	 */
	public function getWaypointGroupId() {
		return $this->waypointGroupId;
	}

	/**
	 * Sets the waypointGroupId
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\WaypointGroup $waypointGroupId
	 * @return void
	 */
	public function setWaypointGroupId(\Xenio\Seenwanderung\Domain\Model\WaypointGroup $waypointGroupId) {
		$this->waypointGroupId = $waypointGroupId;
	}

}