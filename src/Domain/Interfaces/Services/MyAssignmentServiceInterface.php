<?php

namespace ZnUser\Rbac\Domain\Interfaces\Services;

use ZnCore\Domain\Collection\Interfaces\Enumerable;
use ZnCore\Domain\Collection\Libs\Collection;

interface MyAssignmentServiceInterface
{

    public function findAll(): Enumerable;

    public function allNames(): array;
}
