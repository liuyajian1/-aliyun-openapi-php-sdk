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

class ModifyFileCacheExpiredConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "ModifyFileCacheExpiredConfig");
		$this->setMethod("POST");
	}

	private  $securityToken;

	private  $configID;

	private  $domainName;

	private  $weight;

	private  $cacheContent;

	private  $ownerId;

	private  $tTL;

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getConfigID() {
		return $this->configID;
	}

	public function setConfigID($configID) {
		$this->configID = $configID;
		$this->queryParameters["ConfigID"]=$configID;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getWeight() {
		return $this->weight;
	}

	public function setWeight($weight) {
		$this->weight = $weight;
		$this->queryParameters["Weight"]=$weight;
	}

	public function getCacheContent() {
		return $this->cacheContent;
	}

	public function setCacheContent($cacheContent) {
		$this->cacheContent = $cacheContent;
		$this->queryParameters["CacheContent"]=$cacheContent;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTTL() {
		return $this->tTL;
	}

	public function setTTL($tTL) {
		$this->tTL = $tTL;
		$this->queryParameters["TTL"]=$tTL;
	}
	
}