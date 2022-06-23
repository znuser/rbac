<?php

namespace ZnUser\Rbac\Domain\Repositories\File;

use ZnCore\Domain\Query\Entities\Query;
use ZnUser\Rbac\Domain\Entities\RoleEntity;
use ZnUser\Rbac\Domain\Enums\ItemTypeEnum;
use ZnUser\Rbac\Domain\Interfaces\Repositories\RoleRepositoryInterface;
use ZnCore\Base\Store\Base\BaseFileCrudRepository;

class RoleRepository extends ItemRepository implements RoleRepositoryInterface
{

    public function getEntityClass(): string
    {
        return RoleEntity::class;
    }

    protected function forgeQuery(Query $query = null)
    {
        $query = parent::forgeQuery($query);
        $query->where('type', ItemTypeEnum::ROLE);
        return $query;
    }
}
