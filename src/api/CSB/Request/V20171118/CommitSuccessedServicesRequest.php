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
namespace Aliyun\Api\CSB\Request\V20171118;

use Aliyun\Core\RpcAcsRequest;

class CommitSuccessedServicesRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CSB", "2017-11-18", "CommitSuccessedServices");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $csbName;

	private  $services;

	public function getCsbName() {
		return $this->csbName;
	}

	public function setCsbName($csbName) {
		$this->csbName = $csbName;
		$this->queryParameters["CsbName"]=$csbName;
	}

	public function getServices() {
		return $this->services;
	}

	public function setServices($services) {
		$this->services = $services;
		}
	
}