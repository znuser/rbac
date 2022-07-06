<?php

namespace ZnUser\Rbac\Domain\Services;

use ZnUser\Rbac\Domain\Interfaces\Services\InheritanceServiceInterface;
use ZnCore\EntityManager\Interfaces\EntityManagerInterface;
use ZnCore\Service\Base\BaseCrudService;
use ZnUser\Rbac\Domain\Entities\InheritanceEntity;

class InheritanceService extends BaseCrudService implements InheritanceServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return InheritanceEntity::class;
    }


}

