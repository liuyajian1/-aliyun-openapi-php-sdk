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

class DetachLoadBalancersRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DetachLoadBalancers", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $LoadBalancers;

	private  $resourceOwnerAccount;

	private  $scalingGroupId;

	private  $forceDetach;

	private  $ownerId;

	public function getLoadBalancers() {
		return $this->LoadBalancers;
	}

	public function setLoadBalancers($LoadBalancers) {
		$this->LoadBalancers = $LoadBalancers;
		for ($i = 0; $i < count($LoadBalancers); $i ++) {	
			$this->queryParameters["LoadBalancer.".($i+1)] = $LoadBalancers[$i];
		}
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getForceDetach() {
		return $this->forceDetach;
	}

	public function setForceDetach($forceDetach) {
		$this->forceDetach = $forceDetach;
		$this->queryParameters["ForceDetach"]=$forceDetach;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}