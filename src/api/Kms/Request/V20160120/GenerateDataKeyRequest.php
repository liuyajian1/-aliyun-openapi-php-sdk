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
namespace Aliyun\Api\Kms\Request\V20160120;

use Aliyun\Core\RpcAcsRequest;

class GenerateDataKeyRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Kms", "2016-01-20", "GenerateDataKey", "kms", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $encryptionContext;

	private  $keyId;

	private  $keySpec;

	private  $sTSToken;

	private  $numberOfBytes;

	public function getEncryptionContext() {
		return $this->encryptionContext;
	}

	public function setEncryptionContext($encryptionContext) {
		$this->encryptionContext = $encryptionContext;
		$this->queryParameters["EncryptionContext"]=$encryptionContext;
	}

	public function getKeyId() {
		return $this->keyId;
	}

	public function setKeyId($keyId) {
		$this->keyId = $keyId;
		$this->queryParameters["KeyId"]=$keyId;
	}

	public function getKeySpec() {
		return $this->keySpec;
	}

	public function setKeySpec($keySpec) {
		$this->keySpec = $keySpec;
		$this->queryParameters["KeySpec"]=$keySpec;
	}

	public function getSTSToken() {
		return $this->sTSToken;
	}

	public function setSTSToken($sTSToken) {
		$this->sTSToken = $sTSToken;
		$this->queryParameters["STSToken"]=$sTSToken;
	}

	public function getNumberOfBytes() {
		return $this->numberOfBytes;
	}

	public function setNumberOfBytes($numberOfBytes) {
		$this->numberOfBytes = $numberOfBytes;
		$this->queryParameters["NumberOfBytes"]=$numberOfBytes;
	}
	
}