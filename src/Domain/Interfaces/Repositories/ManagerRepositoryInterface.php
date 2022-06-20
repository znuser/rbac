<?php

namespace ZnUser\Rbac\Domain\Interfaces\Repositories;

use ZnCore\Base\Libs\Repository\Interfaces\RepositoryInterface;

interface ManagerRepositoryInterface extends RepositoryInterface
{

    public function allItemsByRoleName(string $roleName): array;
}
