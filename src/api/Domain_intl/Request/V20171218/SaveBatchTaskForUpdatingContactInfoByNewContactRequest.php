<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Api\Domain_intl\Request\V20171218;

use Aliyun\Core\RpcAcsRequest;

class SaveBatchTaskForUpdatingContactInfoByNewContactRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveBatchTaskForUpdatingContactInfoByNewContact", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $country;

	private  $address;

	private  $telArea;

	private  $contactType;

	private  $city;

	private  $DomainNames;

	private  $telephone;

	private  $transferOutProhibited;

	private  $registrantOrganization;

	private  $telExt;

	private  $province;

	private  $postalCode;

	private  $userClientIp;

	private  $lang;

	private  $email;

	private  $registrantName;

	public function getCountry() {
		return $this->country;
	}

	public function setCountry($country) {
		$this->country = $country;
		$this->queryParameters["Country"]=$country;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->queryParameters["Address"]=$address;
	}

	public function getTelArea() {
		return $this->telArea;
	}

	public function setTelArea($telArea) {
		$this->telArea = $telArea;
		$this->queryParameters["TelArea"]=$telArea;
	}

	public function getContactType() {
		return $this->contactType;
	}

	public function setContactType($contactType) {
		$this->contactType = $contactType;
		$this->queryParameters["ContactType"]=$contactType;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->queryParameters["City"]=$city;
	}

	public function getDomainNames() {
		return $this->DomainNames;
	}

	public function setDomainNames($DomainNames) {
		$this->DomainNames = $DomainNames;
		for ($i = 0; $i < count($DomainNames); $i ++) {	
			$this->queryParameters["DomainName.".($i+1)] = $DomainNames[$i];
		}
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		$this->queryParameters["Telephone"]=$telephone;
	}

	public function getTransferOutProhibited() {
		return $this->transferOutProhibited;
	}

	public function setTransferOutProhibited($transferOutProhibited) {
		$this->transferOutProhibited = $transferOutProhibited;
		$this->queryParameters["TransferOutProhibited"]=$transferOutProhibited;
	}

	public function getRegistrantOrganization() {
		return $this->registrantOrganization;
	}

	public function setRegistrantOrganization($registrantOrganization) {
		$this->registrantOrganization = $registrantOrganization;
		$this->queryParameters["RegistrantOrganization"]=$registrantOrganization;
	}

	public function getTelExt() {
		return $this->telExt;
	}

	public function setTelExt($telExt) {
		$this->telExt = $telExt;
		$this->queryParameters["TelExt"]=$telExt;
	}

	public function getProvince() {
		return $this->province;
	}

	public function setProvince($province) {
		$this->province = $province;
		$this->queryParameters["Province"]=$province;
	}

	public function getPostalCode() {
		return $this->postalCode;
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
		$this->queryParameters["PostalCode"]=$postalCode;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
		$this->queryParameters["Email"]=$email;
	}

	public function getRegistrantName() {
		return $this->registrantName;
	}

	public function setRegistrantName($registrantName) {
		$this->registrantName = $registrantName;
		$this->queryParameters["RegistrantName"]=$registrantName;
	}
	
}