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
namespace Aliyun\Api\EHPC\Request\V20180412;

use Aliyun\Core\RpcAcsRequest;

class ListContainerImagesRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "ListContainerImages", "ehs", "openAPI");
	}

	private  $containerType;

	private  $pageSize;

	private  $clusterId;

	private  $pageNumber;

	public function getContainerType() {
		return $this->containerType;
	}

	public function setContainerType($containerType) {
		$this->containerType = $containerType;
		$this->queryParameters["ContainerType"]=$containerType;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}
	
}