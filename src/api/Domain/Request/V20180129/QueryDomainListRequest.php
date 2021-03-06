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

class QueryDomainListRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "QueryDomainList");
		$this->setMethod("POST");
	}

	private  $endExpirationDate;

	private  $productDomainType;

	private  $orderKeyType;

	private  $domainName;

	private  $startExpirationDate;

	private  $pageNum;

	private  $orderByType;

	private  $domainGroupId;

	private  $endRegistrationDate;

	private  $userClientIp;

	private  $pageSize;

	private  $lang;

	private  $queryType;

	private  $startRegistrationDate;

	public function getEndExpirationDate() {
		return $this->endExpirationDate;
	}

	public function setEndExpirationDate($endExpirationDate) {
		$this->endExpirationDate = $endExpirationDate;
		$this->queryParameters["EndExpirationDate"]=$endExpirationDate;
	}

	public function getProductDomainType() {
		return $this->productDomainType;
	}

	public function setProductDomainType($productDomainType) {
		$this->productDomainType = $productDomainType;
		$this->queryParameters["ProductDomainType"]=$productDomainType;
	}

	public function getOrderKeyType() {
		return $this->orderKeyType;
	}

	public function setOrderKeyType($orderKeyType) {
		$this->orderKeyType = $orderKeyType;
		$this->queryParameters["OrderKeyType"]=$orderKeyType;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getStartExpirationDate() {
		return $this->startExpirationDate;
	}

	public function setStartExpirationDate($startExpirationDate) {
		$this->startExpirationDate = $startExpirationDate;
		$this->queryParameters["StartExpirationDate"]=$startExpirationDate;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getOrderByType() {
		return $this->orderByType;
	}

	public function setOrderByType($orderByType) {
		$this->orderByType = $orderByType;
		$this->queryParameters["OrderByType"]=$orderByType;
	}

	public function getDomainGroupId() {
		return $this->domainGroupId;
	}

	public function setDomainGroupId($domainGroupId) {
		$this->domainGroupId = $domainGroupId;
		$this->queryParameters["DomainGroupId"]=$domainGroupId;
	}

	public function getEndRegistrationDate() {
		return $this->endRegistrationDate;
	}

	public function setEndRegistrationDate($endRegistrationDate) {
		$this->endRegistrationDate = $endRegistrationDate;
		$this->queryParameters["EndRegistrationDate"]=$endRegistrationDate;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
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

	public function getQueryType() {
		return $this->queryType;
	}

	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->queryParameters["QueryType"]=$queryType;
	}

	public function getStartRegistrationDate() {
		return $this->startRegistrationDate;
	}

	public function setStartRegistrationDate($startRegistrationDate) {
		$this->startRegistrationDate = $startRegistrationDate;
		$this->queryParameters["StartRegistrationDate"]=$startRegistrationDate;
	}
	
}