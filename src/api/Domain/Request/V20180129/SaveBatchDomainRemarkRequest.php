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

class SaveBatchDomainRemarkRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "SaveBatchDomainRemark");
		$this->setMethod("POST");
	}

	private  $instanceIds;

	private  $remark;

	private  $lang;

	public function getInstanceIds() {
		return $this->instanceIds;
	}

	public function setInstanceIds($instanceIds) {
		$this->instanceIds = $instanceIds;
		$this->queryParameters["InstanceIds"]=$instanceIds;
	}

	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->queryParameters["Remark"]=$remark;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}
	
}