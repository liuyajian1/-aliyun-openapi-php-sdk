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
namespace Aliyun\Api\Mts\Request\V20140618;

use Aliyun\Core\RpcAcsRequest;

class GetLicenseRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "GetLicense", "mts", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $data;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $header;

	private  $ownerId;

	private  $mediaId;

	private  $type;

	private  $licenseUrl;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getData() {
		return $this->data;
	}

	public function setData($data) {
		$this->data = $data;
		$this->queryParameters["Data"]=$data;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getHeader() {
		return $this->header;
	}

	public function setHeader($header) {
		$this->header = $header;
		$this->queryParameters["Header"]=$header;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMediaId() {
		return $this->mediaId;
	}

	public function setMediaId($mediaId) {
		$this->mediaId = $mediaId;
		$this->queryParameters["MediaId"]=$mediaId;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getLicenseUrl() {
		return $this->licenseUrl;
	}

	public function setLicenseUrl($licenseUrl) {
		$this->licenseUrl = $licenseUrl;
		$this->queryParameters["LicenseUrl"]=$licenseUrl;
	}
	
}