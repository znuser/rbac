<?php

namespace ZnUser\Rbac\Domain\Repositories\File;

use ZnCore\Query\Entities\Query;
use ZnUser\Rbac\Domain\Entities\PermissionEntity;
use ZnUser\Rbac\Domain\Entities\RoleEntity;
use ZnUser\Rbac\Domain\Enums\ItemTypeEnum;
use ZnUser\Rbac\Domain\Interfaces\Repositories\RoleRepositoryInterface;
use ZnDomain\Сomponents\FileRepository\Base\BaseFileCrudRepository;

class PermissionRepository extends ItemRepository implements RoleRepositoryInterface
{

    public function getEntityClass(): string
    {
        return PermissionEntity::class;
    }

    protected function forgeQuery(Query $query = null): Query
    {
        $query = parent::forgeQuery($query);
        $query->where('type', ItemTypeEnum::PERMISSION);
        return $query;
    }
}
