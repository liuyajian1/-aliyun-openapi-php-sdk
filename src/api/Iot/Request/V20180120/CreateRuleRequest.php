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
namespace Aliyun\Api\Iot\Request\V20180120;

use Aliyun\Core\RpcAcsRequest;

class CreateRuleRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2018-01-20", "CreateRule");
		$this->setMethod("POST");
	}

	private  $select;

	private  $ruleDesc;

	private  $dataType;

	private  $name;

	private  $where;

	private  $productKey;

	private  $topicType;

	private  $shortTopic;

	public function getSelect() {
		return $this->select;
	}

	public function setSelect($select) {
		$this->select = $select;
		$this->queryParameters["Select"]=$select;
	}

	public function getRuleDesc() {
		return $this->ruleDesc;
	}

	public function setRuleDesc($ruleDesc) {
		$this->ruleDesc = $ruleDesc;
		$this->queryParameters["RuleDesc"]=$ruleDesc;
	}

	public function getDataType() {
		return $this->dataType;
	}

	public function setDataType($dataType) {
		$this->dataType = $dataType;
		$this->queryParameters["DataType"]=$dataType;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getWhere() {
		return $this->where;
	}

	public function setWhere($where) {
		$this->where = $where;
		$this->queryParameters["Where"]=$where;
	}

	public function getProductKey() {
		return $this->productKey;
	}

	public function setProductKey($productKey) {
		$this->productKey = $productKey;
		$this->queryParameters["ProductKey"]=$productKey;
	}

	public function getTopicType() {
		return $this->topicType;
	}

	public function setTopicType($topicType) {
		$this->topicType = $topicType;
		$this->queryParameters["TopicType"]=$topicType;
	}

	public function getShortTopic() {
		return $this->shortTopic;
	}

	public function setShortTopic($shortTopic) {
		$this->shortTopic = $shortTopic;
		$this->queryParameters["ShortTopic"]=$shortTopic;
	}
	
}