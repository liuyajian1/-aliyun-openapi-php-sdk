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
namespace Aliyun\Api\Cms\Request\V20180308;

use Aliyun\Core\RpcAcsRequest;

class DescribeAlarmsForResourcesRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "DescribeAlarmsForResources", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $enableState;

	private  $groupId;

	private  $namespace;

	private  $pageSize;

	private  $alertState;

	private  $page;

	private  $metricName;

	private  $dimensions;

	public function getEnableState() {
		return $this->enableState;
	}

	public function setEnableState($enableState) {
		$this->enableState = $enableState;
		$this->queryParameters["EnableState"]=$enableState;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getNamespace() {
		return $this->namespace;
	}

	public function setNamespace($namespace) {
		$this->namespace = $namespace;
		$this->queryParameters["Namespace"]=$namespace;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getAlertState() {
		return $this->alertState;
	}

	public function setAlertState($alertState) {
		$this->alertState = $alertState;
		$this->queryParameters["AlertState"]=$alertState;
	}

	public function getPage() {
		return $this->page;
	}

	public function setPage($page) {
		$this->page = $page;
		$this->queryParameters["Page"]=$page;
	}

	public function getMetricName() {
		return $this->metricName;
	}

	public function setMetricName($metricName) {
		$this->metricName = $metricName;
		$this->queryParameters["MetricName"]=$metricName;
	}

	public function getDimensions() {
		return $this->dimensions;
	}

	public function setDimensions($dimensions) {
		$this->dimensions = $dimensions;
		$this->queryParameters["Dimensions"]=$dimensions;
	}
	
}