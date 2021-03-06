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
namespace Aliyun\Api\Vpc\Request\V20160428;

use Aliyun\Core\RpcAcsRequest;

class CreateSslVpnServerRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "CreateSslVpnServer", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $cipher;

	private  $resourceOwnerId;

	private  $clientIpPool;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $compress;

	private  $ownerAccount;

	private  $vpnGatewayId;

	private  $ownerId;

	private  $localSubnet;

	private  $port;

	private  $proto;

	private  $name;

	public function getCipher() {
		return $this->cipher;
	}

	public function setCipher($cipher) {
		$this->cipher = $cipher;
		$this->queryParameters["Cipher"]=$cipher;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getClientIpPool() {
		return $this->clientIpPool;
	}

	public function setClientIpPool($clientIpPool) {
		$this->clientIpPool = $clientIpPool;
		$this->queryParameters["ClientIpPool"]=$clientIpPool;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getCompress() {
		return $this->compress;
	}

	public function setCompress($compress) {
		$this->compress = $compress;
		$this->queryParameters["Compress"]=$compress;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getVpnGatewayId() {
		return $this->vpnGatewayId;
	}

	public function setVpnGatewayId($vpnGatewayId) {
		$this->vpnGatewayId = $vpnGatewayId;
		$this->queryParameters["VpnGatewayId"]=$vpnGatewayId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getLocalSubnet() {
		return $this->localSubnet;
	}

	public function setLocalSubnet($localSubnet) {
		$this->localSubnet = $localSubnet;
		$this->queryParameters["LocalSubnet"]=$localSubnet;
	}

	public function getPort() {
		return $this->port;
	}

	public function setPort($port) {
		$this->port = $port;
		$this->queryParameters["Port"]=$port;
	}

	public function getProto() {
		return $this->proto;
	}

	public function setProto($proto) {
		$this->proto = $proto;
		$this->queryParameters["Proto"]=$proto;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}
	
}