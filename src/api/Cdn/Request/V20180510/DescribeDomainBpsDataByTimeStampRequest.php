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

class DescribeDomainBpsDataByTimeStampRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2018-05-10", "DescribeDomainBpsDataByTimeStamp");
		$this->setMethod("POST");
	}

	private  $ispNames;

	private  $securityToken;

	private  $locationNames;

	private  $domainName;

	private  $ownerId;

	private  $timePoint;

	public function getIspNames() {
		return $this->ispNames;
	}

	public function setIspNames($ispNames) {
		$this->ispNames = $ispNames;
		$this->queryParameters["IspNames"]=$ispNames;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getLocationNames() {
		return $this->locationNames;
	}

	public function setLocationNames($locationNames) {
		$this->locationNames = $locationNames;
		$this->queryParameters["LocationNames"]=$locationNames;
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

	public function getTimePoint() {
		return $this->timePoint;
	}

	public function setTimePoint($timePoint) {
		$this->timePoint = $timePoint;
		$this->queryParameters["TimePoint"]=$timePoint;
	}
	
}