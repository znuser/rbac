<?php

namespace ZnUser\Rbac\Domain\Interfaces\Repositories;

use ZnCore\Domain\Interfaces\Repository\RepositoryInterface;

interface ManagerRepositoryInterface extends RepositoryInterface
{

    public function allItemsByRoleName(string $roleName): array;
}
