<?php

namespace ZnUser\Rbac\Domain\Interfaces\Services;

use ZnCore\Collection\Interfaces\Enumerable;
use ZnCore\Query\Entities\Query;
use ZnCore\Service\Interfaces\CrudServiceInterface;

interface AssignmentServiceInterface extends CrudServiceInterface
{

    public function getRolesByIdentityId(int $identityId): array;

    public function allByIdentityId(int $identityId, Query $query = null): Enumerable;
}

