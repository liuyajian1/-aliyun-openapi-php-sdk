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
namespace Aliyun\Api\Ess\Request\V20140828;

use Aliyun\Core\RpcAcsRequest;

class ModifyScalingRuleRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "ModifyScalingRule", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $scalingRuleName;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $adjustmentValue;

	private  $ownerAccount;

	private  $cooldown;

	private  $adjustmentType;

	private  $ownerId;

	private  $scalingRuleId;

	public function getScalingRuleName() {
		return $this->scalingRuleName;
	}

	public function setScalingRuleName($scalingRuleName) {
		$this->scalingRuleName = $scalingRuleName;
		$this->queryParameters["ScalingRuleName"]=$scalingRuleName;
	}

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

	public function getAdjustmentValue() {
		return $this->adjustmentValue;
	}

	public function setAdjustmentValue($adjustmentValue) {
		$this->adjustmentValue = $adjustmentValue;
		$this->queryParameters["AdjustmentValue"]=$adjustmentValue;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getCooldown() {
		return $this->cooldown;
	}

	public function setCooldown($cooldown) {
		$this->cooldown = $cooldown;
		$this->queryParameters["Cooldown"]=$cooldown;
	}

	public function getAdjustmentType() {
		return $this->adjustmentType;
	}

	public function setAdjustmentType($adjustmentType) {
		$this->adjustmentType = $adjustmentType;
		$this->queryParameters["AdjustmentType"]=$adjustmentType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getScalingRuleId() {
		return $this->scalingRuleId;
	}

	public function setScalingRuleId($scalingRuleId) {
		$this->scalingRuleId = $scalingRuleId;
		$this->queryParameters["ScalingRuleId"]=$scalingRuleId;
	}
	
}