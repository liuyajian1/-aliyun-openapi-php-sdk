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

class DeleteLifecycleHookRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DeleteLifecycleHook", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $lifecycleHookName;

	private  $resourceOwnerAccount;

	private  $lifecycleHookId;

	private  $scalingGroupId;

	private  $ownerAccount;

	private  $ownerId;

	public function getLifecycleHookName() {
		return $this->lifecycleHookName;
	}

	public function setLifecycleHookName($lifecycleHookName) {
		$this->lifecycleHookName = $lifecycleHookName;
		$this->queryParameters["LifecycleHookName"]=$lifecycleHookName;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getLifecycleHookId() {
		return $this->lifecycleHookId;
	}

	public function setLifecycleHookId($lifecycleHookId) {
		$this->lifecycleHookId = $lifecycleHookId;
		$this->queryParameters["LifecycleHookId"]=$lifecycleHookId;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}