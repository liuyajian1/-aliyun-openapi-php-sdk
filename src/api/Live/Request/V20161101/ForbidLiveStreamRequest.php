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
namespace Aliyun\Api\Live\Request\V20161101;

use Aliyun\Core\RpcAcsRequest;

class ForbidLiveStreamRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "ForbidLiveStream", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $appName;

	private  $streamName;

	private  $controlStreamAction;

	private  $resumeTime;

	private  $liveStreamType;

	private  $domainName;

	private  $ownerId;

	private  $oneshot;

	public function getAppName() {
		return $this->appName;
	}

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->queryParameters["AppName"]=$appName;
	}

	public function getStreamName() {
		return $this->streamName;
	}

	public function setStreamName($streamName) {
		$this->streamName = $streamName;
		$this->queryParameters["StreamName"]=$streamName;
	}

	public function getControlStreamAction() {
		return $this->controlStreamAction;
	}

	public function setControlStreamAction($controlStreamAction) {
		$this->controlStreamAction = $controlStreamAction;
		$this->queryParameters["ControlStreamAction"]=$controlStreamAction;
	}

	public function getResumeTime() {
		return $this->resumeTime;
	}

	public function setResumeTime($resumeTime) {
		$this->resumeTime = $resumeTime;
		$this->queryParameters["ResumeTime"]=$resumeTime;
	}

	public function getLiveStreamType() {
		return $this->liveStreamType;
	}

	public function setLiveStreamType($liveStreamType) {
		$this->liveStreamType = $liveStreamType;
		$this->queryParameters["LiveStreamType"]=$liveStreamType;
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

	public function getOneshot() {
		return $this->oneshot;
	}

	public function setOneshot($oneshot) {
		$this->oneshot = $oneshot;
		$this->queryParameters["Oneshot"]=$oneshot;
	}
	
}