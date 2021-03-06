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
namespace Aliyun\Api\Hsm\Request\V20180111;

use Aliyun\Core\RpcAcsRequest;

class CreateInstanceRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("hsm", "2018-01-11", "CreateInstance", "hsm", "openAPI");
		$this->setMethod("POST");
	}

	private  $period;

	private  $periodUnit;

	private  $resourceOwnerId;

	private  $quantity;

	private  $hsmDeviceType;

	private  $clientToken;

	private  $zoneId;

	private  $hsmOem;

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	public function setPeriodUnit($periodUnit) {
		$this->periodUnit = $periodUnit;
		$this->queryParameters["PeriodUnit"]=$periodUnit;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->queryParameters["Quantity"]=$quantity;
	}

	public function getHsmDeviceType() {
		return $this->hsmDeviceType;
	}

	public function setHsmDeviceType($hsmDeviceType) {
		$this->hsmDeviceType = $hsmDeviceType;
		$this->queryParameters["HsmDeviceType"]=$hsmDeviceType;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getHsmOem() {
		return $this->hsmOem;
	}

	public function setHsmOem($hsmOem) {
		$this->hsmOem = $hsmOem;
		$this->queryParameters["HsmOem"]=$hsmOem;
	}
	
}