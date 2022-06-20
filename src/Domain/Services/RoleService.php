<?php

namespace ZnUser\Rbac\Domain\Services;

use ZnUser\Rbac\Domain\Interfaces\Services\RoleServiceInterface;
use ZnCore\Base\Libs\EntityManager\Interfaces\EntityManagerInterface;
use ZnCore\Base\Libs\Service\Base\BaseCrudService;
use ZnUser\Rbac\Domain\Entities\RoleEntity;

class RoleService extends BaseCrudService implements RoleServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return RoleEntity::class;
    }
}

