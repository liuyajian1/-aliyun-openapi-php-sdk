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
namespace Aliyun\Api\Cdn\Request\V20141111;

use Aliyun\Core\RpcAcsRequest;

class SetReqAuthConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetReqAuthConfig");
		$this->setMethod("POST");
	}

	private  $key1;

	private  $key2;

	private  $authRemoteDesc;

	private  $securityToken;

	private  $domainName;

	private  $ownerId;

	private  $timeOut;

	private  $authType;

	public function getKey1() {
		return $this->key1;
	}

	public function setKey1($key1) {
		$this->key1 = $key1;
		$this->queryParameters["Key1"]=$key1;
	}

	public function getKey2() {
		return $this->key2;
	}

	public function setKey2($key2) {
		$this->key2 = $key2;
		$this->queryParameters["Key2"]=$key2;
	}

	public function getAuthRemoteDesc() {
		return $this->authRemoteDesc;
	}

	public function setAuthRemoteDesc($authRemoteDesc) {
		$this->authRemoteDesc = $authRemoteDesc;
		$this->queryParameters["AuthRemoteDesc"]=$authRemoteDesc;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTimeOut() {
		return $this->timeOut;
	}

	public function setTimeOut($timeOut) {
		$this->timeOut = $timeOut;
		$this->queryParameters["TimeOut"]=$timeOut;
	}

	public function getAuthType() {
		return $this->authType;
	}

	public function setAuthType($authType) {
		$this->authType = $authType;
		$this->queryParameters["AuthType"]=$authType;
	}
	
}