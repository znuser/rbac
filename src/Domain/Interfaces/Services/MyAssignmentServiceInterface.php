<?php

namespace ZnUser\Rbac\Domain\Interfaces\Services;

use ZnCore\Domain\Collection\Libs\Collection;

interface MyAssignmentServiceInterface
{

    public function findAll(): Collection;

    public function allNames(): array;
}
