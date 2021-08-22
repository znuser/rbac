<?php

namespace ZnUser\Rbac\Domain\Repositories\Eloquent;

use ZnCore\Domain\Libs\Query;
use ZnUser\Rbac\Domain\Entities\ItemEntity;
use ZnUser\Rbac\Domain\Entities\PermissionEntity;
use ZnUser\Rbac\Domain\Enums\ItemTypeEnum;

class PermissionRepository extends ItemRepository
{

    public function getEntityClass(): string
    {
        return PermissionEntity::class;
    }

    protected function forgeQuery(Query $query = null)
    {
        $query = parent::forgeQuery($query);
        $query->where('type', ItemTypeEnum::PERMISSION);
        return $query;
    }
}
