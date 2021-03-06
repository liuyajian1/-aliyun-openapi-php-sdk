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
namespace Aliyun\Api\Dcdn\Request\V20180115;

use Aliyun\Core\RpcAcsRequest;

class SetDcdnDomainCertificateRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("dcdn", "2018-01-15", "SetDcdnDomainCertificate");
		$this->setMethod("POST");
	}

	private  $securityToken;

	private  $certType;

	private  $sSLPub;

	private  $certName;

	private  $sSLProtocol;

	private  $domainName;

	private  $ownerId;

	private  $region;

	private  $sSLPri;

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getCertType() {
		return $this->certType;
	}

	public function setCertType($certType) {
		$this->certType = $certType;
		$this->queryParameters["CertType"]=$certType;
	}

	public function getSSLPub() {
		return $this->sSLPub;
	}

	public function setSSLPub($sSLPub) {
		$this->sSLPub = $sSLPub;
		$this->queryParameters["SSLPub"]=$sSLPub;
	}

	public function getCertName() {
		return $this->certName;
	}

	public function setCertName($certName) {
		$this->certName = $certName;
		$this->queryParameters["CertName"]=$certName;
	}

	public function getSSLProtocol() {
		return $this->sSLProtocol;
	}

	public function setSSLProtocol($sSLProtocol) {
		$this->sSLProtocol = $sSLProtocol;
		$this->queryParameters["SSLProtocol"]=$sSLProtocol;
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

	public function getRegion() {
		return $this->region;
	}

	public function setRegion($region) {
		$this->region = $region;
		$this->queryParameters["Region"]=$region;
	}

	public function getSSLPri() {
		return $this->sSLPri;
	}

	public function setSSLPri($sSLPri) {
		$this->sSLPri = $sSLPri;
		$this->queryParameters["SSLPri"]=$sSLPri;
	}
	
}