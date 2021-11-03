<?php
namespace Aliyun\Core\Regions;

use Aliyun\Core\RpcAcsRequest;

/**
 * AliyunOpenapiPhpSdk
 *
 * User: shengli
 * Date: 2018/8/30
 * Time: 15:19
 */


class DescribeEndpointRequest extends RpcAcsRequest
{
    function __construct($id, $serviceCode, $endPointType)
    {
        parent::__construct('Location', '2015-06-12', 'DescribeEndpoints');

        $this->queryParameters["Id"] = $id;
        $this->queryParameters["ServiceCode"] = $serviceCode;
        $this->queryParameters["Type"] = $endPointType;
        $this->setRegionId('cn-hangzhou');

        $this->setAcceptFormat("JSON");
    }
}