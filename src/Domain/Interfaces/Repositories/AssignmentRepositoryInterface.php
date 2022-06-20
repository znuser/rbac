<?php

namespace ZnUser\Rbac\Domain\Interfaces\Repositories;

use Illuminate\Support\Collection;
use ZnCore\Base\Libs\Repository\Interfaces\CrudRepositoryInterface;
use ZnCore\Base\Libs\Query\Entities\Query;

interface AssignmentRepositoryInterface extends CrudRepositoryInterface
{

    public function allByIdentityId(int $identityId, Query $query = null): Collection;
}

