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

class MoveFacePhotosRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "MoveFacePhotos", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $libraryId;

	private  $targetFaceId;

	private  $PhotoIds;

	private  $storeName;

	private  $sourceFaceId;

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getTargetFaceId() {
		return $this->targetFaceId;
	}

	public function setTargetFaceId($targetFaceId) {
		$this->targetFaceId = $targetFaceId;
		$this->queryParameters["TargetFaceId"]=$targetFaceId;
	}

	public function getPhotoIds() {
		return $this->PhotoIds;
	}

	public function setPhotoIds($PhotoIds) {
		$this->PhotoIds = $PhotoIds;
		for ($i = 0; $i < count($PhotoIds); $i ++) {	
			$this->queryParameters["PhotoId.".($i+1)] = $PhotoIds[$i];
		}
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getSourceFaceId() {
		return $this->sourceFaceId;
	}

	public function setSourceFaceId($sourceFaceId) {
		$this->sourceFaceId = $sourceFaceId;
		$this->queryParameters["SourceFaceId"]=$sourceFaceId;
	}
	
}