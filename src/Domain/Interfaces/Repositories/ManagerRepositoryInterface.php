<?php

namespace ZnUser\Rbac\Domain\Interfaces\Repositories;

use ZnCore\Domain\Repository\Interfaces\RepositoryInterface;

interface ManagerRepositoryInterface extends RepositoryInterface
{

    public function allItemsByRoleName(string $roleName): array;
}
