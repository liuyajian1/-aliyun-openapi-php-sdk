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
namespace Aliyun\Api\R_kvstore\Request\V20150101;

use Aliyun\Core\RpcAcsRequest;

class DescribeReplicaPerformanceRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("R-kvstore", "2015-01-01", "DescribeReplicaPerformance", "redisa", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $destinationDBInstanceId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $endTime;

	private  $startTime;

	private  $ownerId;

	private  $sourceDBInstanceId;

	private  $securityToken;

	private  $replicaId;

	private  $key;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDestinationDBInstanceId() {
		return $this->destinationDBInstanceId;
	}

	public function setDestinationDBInstanceId($destinationDBInstanceId) {
		$this->destinationDBInstanceId = $destinationDBInstanceId;
		$this->queryParameters["DestinationDBInstanceId"]=$destinationDBInstanceId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSourceDBInstanceId() {
		return $this->sourceDBInstanceId;
	}

	public function setSourceDBInstanceId($sourceDBInstanceId) {
		$this->sourceDBInstanceId = $sourceDBInstanceId;
		$this->queryParameters["SourceDBInstanceId"]=$sourceDBInstanceId;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getReplicaId() {
		return $this->replicaId;
	}

	public function setReplicaId($replicaId) {
		$this->replicaId = $replicaId;
		$this->queryParameters["ReplicaId"]=$replicaId;
	}

	public function getKey() {
		return $this->key;
	}

	public function setKey($key) {
		$this->key = $key;
		$this->queryParameters["Key"]=$key;
	}
	
}