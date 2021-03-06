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
namespace Aliyun\Api\Domain\Request\V20180129;

use Aliyun\Core\RpcAcsRequest;

class QueryTransferInListRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "QueryTransferInList");
		$this->setMethod("POST");
	}

	private  $submissionStartDate;

	private  $userClientIp;

	private  $submissionEndDate;

	private  $domainName;

	private  $simpleTransferInStatus;

	private  $pageSize;

	private  $lang;

	private  $pageNum;

	public function getSubmissionStartDate() {
		return $this->submissionStartDate;
	}

	public function setSubmissionStartDate($submissionStartDate) {
		$this->submissionStartDate = $submissionStartDate;
		$this->queryParameters["SubmissionStartDate"]=$submissionStartDate;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getSubmissionEndDate() {
		return $this->submissionEndDate;
	}

	public function setSubmissionEndDate($submissionEndDate) {
		$this->submissionEndDate = $submissionEndDate;
		$this->queryParameters["SubmissionEndDate"]=$submissionEndDate;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getSimpleTransferInStatus() {
		return $this->simpleTransferInStatus;
	}

	public function setSimpleTransferInStatus($simpleTransferInStatus) {
		$this->simpleTransferInStatus = $simpleTransferInStatus;
		$this->queryParameters["SimpleTransferInStatus"]=$simpleTransferInStatus;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}
	
}