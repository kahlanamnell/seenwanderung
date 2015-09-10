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
 * Hiker
 */
class Hiker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * sex
	 *
	 * @var integer
	 */
	protected $sex = 0;

	/**
	 * firstName
	 *
	 * @var string
	 */
	protected $firstName = '';

	/**
	 * lastName
	 *
	 * @var string
	 */
	protected $lastName = '';

	/**
	 * birthday
	 *
	 * @var \DateTime
	 */
	protected $birthday = NULL;

	/**
	 * street
	 *
	 * @var string
	 */
	protected $street = '';

	/**
	 * streetNumber
	 *
	 * @var string
	 */
	protected $streetNumber = '';

	/**
	 * zip
	 *
	 * @var string
	 */
	protected $zip = '';

	/**
	 * city
	 *
	 * @var string
	 */
	protected $city = '';

	/**
	 * hikingRoute
	 *
	 * @var \Xenio\Seenwanderung\Domain\Model\HikingRoute
	 */
	protected $hikingRoute = NULL;

	/**
	 * vehicle
	 *
	 * @var \Xenio\Seenwanderung\Domain\Model\Vehicle
	 */
	protected $vehicle = NULL;

	/**
	 * Returns the sex
	 *
	 * @return integer $sex
	 */
	public function getSex() {
		return $this->sex;
	}

	/**
	 * Sets the sex
	 *
	 * @param integer $sex
	 * @return void
	 */
	public function setSex($sex) {
		$this->sex = $sex;
	}

	/**
	 * Returns the firstName
	 *
	 * @return string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 *
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the lastName
	 *
	 * @return string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 *
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the birthday
	 *
	 * @return \DateTime $birthday
	 */
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * Sets the birthday
	 *
	 * @param \DateTime $birthday
	 * @return void
	 */
	public function setBirthday(\DateTime $birthday) {
		$this->birthday = $birthday;
	}

	/**
	 * Returns the street
	 *
	 * @return string $street
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the street
	 *
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Returns the streetNumber
	 *
	 * @return string $streetNumber
	 */
	public function getStreetNumber() {
		return $this->streetNumber;
	}

	/**
	 * Sets the streetNumber
	 *
	 * @param string $streetNumber
	 * @return void
	 */
	public function setStreetNumber($streetNumber) {
		$this->streetNumber = $streetNumber;
	}

	/**
	 * Returns the zip
	 *
	 * @return string $zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the zip
	 *
	 * @param string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the city
	 *
	 * @return string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the hikingRoute
	 *
	 * @return \Xenio\Seenwanderung\Domain\Model\HikingRoute $hikingRoute
	 */
	public function getHikingRoute() {
		return $this->hikingRoute;
	}

	/**
	 * Sets the hikingRoute
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\HikingRoute $hikingRoute
	 * @return void
	 */
	public function setHikingRoute(\Xenio\Seenwanderung\Domain\Model\HikingRoute $hikingRoute) {
		$this->hikingRoute = $hikingRoute;
	}

	/**
	 * Returns the vehicle
	 *
	 * @return \Xenio\Seenwanderung\Domain\Model\Vehicle $vehicle
	 */
	public function getVehicle() {
		return $this->vehicle;
	}

	/**
	 * Sets the vehicle
	 *
	 * @param \Xenio\Seenwanderung\Domain\Model\Vehicle $vehicle
	 * @return void
	 */
	public function setVehicle(\Xenio\Seenwanderung\Domain\Model\Vehicle $vehicle) {
		$this->vehicle = $vehicle;
	}

}