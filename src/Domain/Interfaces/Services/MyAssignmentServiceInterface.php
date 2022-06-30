<?php

namespace ZnUser\Rbac\Domain\Interfaces\Services;

use Illuminate\Support\Collection;

interface MyAssignmentServiceInterface
{

    public function findAll(): Collection;

    public function allNames(): array;
}
