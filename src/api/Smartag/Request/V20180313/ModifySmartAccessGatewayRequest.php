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
namespace Aliyun\Api\Smartag\Request\V20180313;

use Aliyun\Core\RpcAcsRequest;

class ModifySmartAccessGatewayRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Smartag", "2018-03-13", "ModifySmartAccessGateway", "smartag", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $city;

	private  $ownerAccount;

	private  $name;

	private  $cidrBlock;

	private  $smartAGId;

	private  $description;

	private  $ownerId;

	private  $securityLockThreshold;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->queryParameters["City"]=$city;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getCidrBlock() {
		return $this->cidrBlock;
	}

	public function setCidrBlock($cidrBlock) {
		$this->cidrBlock = $cidrBlock;
		$this->queryParameters["CidrBlock"]=$cidrBlock;
	}

	public function getSmartAGId() {
		return $this->smartAGId;
	}

	public function setSmartAGId($smartAGId) {
		$this->smartAGId = $smartAGId;
		$this->queryParameters["SmartAGId"]=$smartAGId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSecurityLockThreshold() {
		return $this->securityLockThreshold;
	}

	public function setSecurityLockThreshold($securityLockThreshold) {
		$this->securityLockThreshold = $securityLockThreshold;
		$this->queryParameters["SecurityLockThreshold"]=$securityLockThreshold;
	}
	
}