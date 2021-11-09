<?php

namespace ZnUser\Rbac\Domain\Services;

use Illuminate\Support\Collection;
use ZnBundle\User\Domain\Interfaces\Services\AuthServiceInterface;
use ZnCore\Domain\Base\BaseService;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use ZnUser\Rbac\Domain\Entities\AssignmentEntity;
use ZnUser\Rbac\Domain\Entities\MyAssignmentEntity;
use ZnUser\Rbac\Domain\Interfaces\Repositories\MyAssignmentRepositoryInterface;
use ZnUser\Rbac\Domain\Interfaces\Services\AssignmentServiceInterface;
use ZnUser\Rbac\Domain\Interfaces\Services\MyAssignmentServiceInterface;

/**
 * @method MyAssignmentRepositoryInterface getRepository()
 */
class MyAssignmentService extends BaseService implements MyAssignmentServiceInterface
{

    private $authService;
    private $assignmentService;

    public function __construct(
        EntityManagerInterface $em,
        AuthServiceInterface $authService,
        AssignmentServiceInterface $assignmentService
    )
    {
        $this->setEntityManager($em);
        $this->authService = $authService;
        $this->assignmentService = $assignmentService;
    }

    public function getEntityClass(): string
    {
        return AssignmentEntity::class;
    }

    public function all(): Collection
    {
        $identityId = $this->authService->getIdentity()->getId();
        return $this->assignmentService->allByIdentityId($identityId);
    }

    public function allNames(): array
    {
        $identityId = $this->authService->getIdentity()->getId();
        return $this->assignmentService->getRolesByIdentityId($identityId);
    }
}
