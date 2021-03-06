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

class ListEmailVerificationRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "ListEmailVerification");
		$this->setMethod("POST");
	}

	private  $beginCreateTime;

	private  $endCreateTime;

	private  $pageSize;

	private  $lang;

	private  $pageNum;

	private  $email;

	private  $verificationStatus;

	public function getBeginCreateTime() {
		return $this->beginCreateTime;
	}

	public function setBeginCreateTime($beginCreateTime) {
		$this->beginCreateTime = $beginCreateTime;
		$this->queryParameters["BeginCreateTime"]=$beginCreateTime;
	}

	public function getEndCreateTime() {
		return $this->endCreateTime;
	}

	public function setEndCreateTime($endCreateTime) {
		$this->endCreateTime = $endCreateTime;
		$this->queryParameters["EndCreateTime"]=$endCreateTime;
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

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
		$this->queryParameters["Email"]=$email;
	}

	public function getVerificationStatus() {
		return $this->verificationStatus;
	}

	public function setVerificationStatus($verificationStatus) {
		$this->verificationStatus = $verificationStatus;
		$this->queryParameters["VerificationStatus"]=$verificationStatus;
	}
	
}