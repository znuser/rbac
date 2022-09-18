<?php

namespace ZnUser\Rbac\Rpc\Controllers;

use ZnDomain\Entity\Helpers\EntityHelper;
use ZnLib\Rpc\Domain\Entities\RpcRequestEntity;
use ZnLib\Rpc\Domain\Entities\RpcResponseEntity;
use ZnUser\Rbac\Domain\Interfaces\Services\MyAssignmentServiceInterface;

class MyAssignmentController
{

    public function __construct(MyAssignmentServiceInterface $service)
    {
        $this->service = $service;
    }

    public function allRoles(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $resultArray = $this->service->allNames();
        $response = new RpcResponseEntity();
        $response->setResult($resultArray);
        return $response;
    }

    public function allPermissions(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $resultArray = $this->service->allPermissions();
        $response = new RpcResponseEntity();
        $response->setResult($resultArray);
        return $response;
    }
}
