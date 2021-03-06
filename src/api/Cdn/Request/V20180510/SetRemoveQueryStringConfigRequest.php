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
namespace Aliyun\Api\Cdn\Request\V20180510;

use Aliyun\Core\RpcAcsRequest;

class SetRemoveQueryStringConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2018-05-10", "SetRemoveQueryStringConfig");
	}

	private  $aliRemoveArgs;

	private  $keepOssArgs;

	private  $domainName;

	private  $ownerId;

	private  $configId;

	public function getAliRemoveArgs() {
		return $this->aliRemoveArgs;
	}

	public function setAliRemoveArgs($aliRemoveArgs) {
		$this->aliRemoveArgs = $aliRemoveArgs;
		$this->queryParameters["AliRemoveArgs"]=$aliRemoveArgs;
	}

	public function getKeepOssArgs() {
		return $this->keepOssArgs;
	}

	public function setKeepOssArgs($keepOssArgs) {
		$this->keepOssArgs = $keepOssArgs;
		$this->queryParameters["KeepOssArgs"]=$keepOssArgs;
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

	public function getConfigId() {
		return $this->configId;
	}

	public function setConfigId($configId) {
		$this->configId = $configId;
		$this->queryParameters["ConfigId"]=$configId;
	}
	
}