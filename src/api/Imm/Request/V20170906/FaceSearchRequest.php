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
namespace Aliyun\Api\Imm\Request\V20170906;

use Aliyun\Core\RpcAcsRequest;

class FaceSearchRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("imm", "2017-09-06", "FaceSearch", "imm", "openAPI");
		$this->setMethod("POST");
	}

	private  $resultNum;

	private  $project;

	private  $searchThresholdLevel;

	private  $srcUri;

	private  $isThreshold;

	private  $groupName;

	public function getResultNum() {
		return $this->resultNum;
	}

	public function setResultNum($resultNum) {
		$this->resultNum = $resultNum;
		$this->queryParameters["ResultNum"]=$resultNum;
	}

	public function getProject() {
		return $this->project;
	}

	public function setProject($project) {
		$this->project = $project;
		$this->queryParameters["Project"]=$project;
	}

	public function getSearchThresholdLevel() {
		return $this->searchThresholdLevel;
	}

	public function setSearchThresholdLevel($searchThresholdLevel) {
		$this->searchThresholdLevel = $searchThresholdLevel;
		$this->queryParameters["SearchThresholdLevel"]=$searchThresholdLevel;
	}

	public function getSrcUri() {
		return $this->srcUri;
	}

	public function setSrcUri($srcUri) {
		$this->srcUri = $srcUri;
		$this->queryParameters["SrcUri"]=$srcUri;
	}

	public function getIsThreshold() {
		return $this->isThreshold;
	}

	public function setIsThreshold($isThreshold) {
		$this->isThreshold = $isThreshold;
		$this->queryParameters["IsThreshold"]=$isThreshold;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}
	
}