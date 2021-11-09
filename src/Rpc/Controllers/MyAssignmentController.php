<?php

namespace ZnUser\Rbac\Rpc\Controllers;

use ZnCore\Domain\Helpers\EntityHelper;
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
}
