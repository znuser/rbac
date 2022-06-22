<?php

namespace ZnUser\Rbac\Domain\Interfaces\Services;

use Illuminate\Support\Collection;
use ZnCore\Domain\Service\Interfaces\CrudServiceInterface;
use ZnCore\Domain\Query\Entities\Query;

interface AssignmentServiceInterface extends CrudServiceInterface
{

    public function getRolesByIdentityId(int $identityId): array;

    public function allByIdentityId(int $identityId, Query $query = null): Collection;
}

