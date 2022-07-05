<?php

namespace ZnUser\Rbac\Domain\Interfaces\Services;

use ZnCore\Domain\Collection\Interfaces\Enumerable;
use ZnCore\Domain\Query\Entities\Query;
use ZnCore\Domain\Service\Interfaces\CrudServiceInterface;

interface AssignmentServiceInterface extends CrudServiceInterface
{

    public function getRolesByIdentityId(int $identityId): array;

    public function allByIdentityId(int $identityId, Query $query = null): Enumerable;
}

