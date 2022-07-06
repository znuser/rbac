<?php

namespace ZnUser\Rbac\Domain\Interfaces\Repositories;

use ZnCore\Collection\Interfaces\Enumerable;
use ZnCore\Query\Entities\Query;
use ZnCore\Repository\Interfaces\CrudRepositoryInterface;

interface AssignmentRepositoryInterface extends CrudRepositoryInterface
{

    public function allByIdentityId(int $identityId, Query $query = null): Enumerable;
}

