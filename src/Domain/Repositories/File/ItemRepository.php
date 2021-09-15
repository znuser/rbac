<?php

namespace ZnUser\Rbac\Domain\Repositories\File;

use ZnUser\Rbac\Domain\Entities\ItemEntity;
use ZnUser\Rbac\Domain\Entities\RoleEntity;
use ZnUser\Rbac\Domain\Interfaces\Repositories\ItemRepositoryInterface;
use ZnUser\Rbac\Domain\Interfaces\Repositories\RoleRepositoryInterface;
use ZnCore\Domain\Base\Repositories\BaseFileCrudRepository;

class ItemRepository extends BaseFileCrudRepository implements ItemRepositoryInterface
{

    public function getEntityClass(): string
    {
        return ItemEntity::class;
    }

    public function fileName(): string
    {
        return __DIR__ . '/../../../../../../../fixtures/rbac_item.php';
    }
}
