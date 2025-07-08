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
namespace Ecs\Request\V20140526;

class AssignIpv6AddressesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "AssignIpv6Addresses", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ipv6AddressCount;

	private  $ownerAccount;

	private  $ownerId;

	private  $networkInterfaceId;

	private  $Ipv6Addresss;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getIpv6AddressCount() {
		return $this->ipv6AddressCount;
	}

	public function setIpv6AddressCount($ipv6AddressCount) {
		$this->ipv6AddressCount = $ipv6AddressCount;
		$this->queryParameters["Ipv6AddressCount"]=$ipv6AddressCount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getNetworkInterfaceId() {
		return $this->networkInterfaceId;
	}

	public function setNetworkInterfaceId($networkInterfaceId) {
		$this->networkInterfaceId = $networkInterfaceId;
		$this->queryParameters["NetworkInterfaceId"]=$networkInterfaceId;
	}

	public function getIpv6Addresss() {
		return $this->Ipv6Addresss;
	}

	public function setIpv6Addresss($Ipv6Addresss) {
		$this->Ipv6Addresss = $Ipv6Addresss;
		for ($i = 0; $i < count($Ipv6Addresss); $i ++) {	
			$this->queryParameters["Ipv6Address.".($i+1)] = $Ipv6Addresss[$i];
		}
	}
	
}