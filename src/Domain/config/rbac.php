<?php

use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\RbacAssignmentEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\RbacItemPermissionEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\RbacMyAssignmentPermissionEnum;

return [
    'roleEnums' => [

    ],
    'permissionEnums' => [
        RbacItemPermissionEnum::class,
        RbacAssignmentEnum::class,
        RbacMyAssignmentPermissionEnum::class,
    ],
    'inheritance' => [
        SystemRoleEnum::GUEST => [

        ],
        SystemRoleEnum::USER => [

        ],
        SystemRoleEnum::ADMINISTRATOR => [
            RbacItemPermissionEnum::ALL,
            RbacItemPermissionEnum::ONE,
            RbacItemPermissionEnum::CREATE,
            RbacItemPermissionEnum::UPDATE,
            RbacItemPermissionEnum::DELETE,

            RbacAssignmentEnum::ATTACH,
            RbacAssignmentEnum::DETACH,
            RbacAssignmentEnum::ALL_ROLES,
        ],
    ],
];
