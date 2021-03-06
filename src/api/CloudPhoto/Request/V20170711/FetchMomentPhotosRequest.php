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
namespace Aliyun\Api\CloudPhoto\Request\V20170711;

use Aliyun\Core\RpcAcsRequest;

class FetchMomentPhotosRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "FetchMomentPhotos", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $size;

	private  $libraryId;

	private  $orderBy;

	private  $storeName;

	private  $page;

	private  $momentId;

	private  $order;

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->queryParameters["Size"]=$size;
	}

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getOrderBy() {
		return $this->orderBy;
	}

	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->queryParameters["OrderBy"]=$orderBy;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getPage() {
		return $this->page;
	}

	public function setPage($page) {
		$this->page = $page;
		$this->queryParameters["Page"]=$page;
	}

	public function getMomentId() {
		return $this->momentId;
	}

	public function setMomentId($momentId) {
		$this->momentId = $momentId;
		$this->queryParameters["MomentId"]=$momentId;
	}

	public function getOrder() {
		return $this->order;
	}

	public function setOrder($order) {
		$this->order = $order;
		$this->queryParameters["Order"]=$order;
	}
	
}