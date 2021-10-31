<?php

use ZnCore\Base\Helpers\EnvHelper;
use Psr\Container\ContainerInterface;
use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;
use ZnUser\Rbac\Domain\Interfaces\Services\ManagerServiceInterface;
use ZnUser\Rbac\Domain\Services\ManagerService;

$isDbDriver = true;
//$isDbDriver = !EnvHelper::isDev();

return [
    'singletons' => [
        'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\RoleServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\RoleService',
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\RoleRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\RoleRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_item.php' : __DIR__ . '/../../../../../../fixtures/rbac_item.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\RoleRepository');
                $repository->setFileName($fileName);
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\ManagerServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\ManagerService',

//        ManagerServiceInterface::class => function(ContainerInterface $container) {
//            /** @var ManagerService $managerService */
//            $managerService = $container->make(ManagerService::class);
//            $managerService->setDefaultRoles([SystemRoleEnum::GUEST]);
//            return $managerService;
//        },

        'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\InheritanceServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\InheritanceService',
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\InheritanceRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\InheritanceRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_inheritance.php' : __DIR__ . '/../../../../../../fixtures/rbac_inheritance.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\InheritanceRepository');
                $repository->setFileName($fileName);
                return $repository;
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\ManagerRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\File\\ManagerRepository',
        'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\ItemServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\ItemService',
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\ItemRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\ItemRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_item.php' : __DIR__ . '/../../../../../../fixtures/rbac_item.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\ItemRepository');
                $repository->setFileName($fileName);
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\PermissionServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\PermissionService',
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\PermissionRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\PermissionRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_item.php' : __DIR__ . '/../../../../../../fixtures/rbac_item.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\PermissionRepository');
                $repository->setFileName($fileName);
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\AssignmentServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\AssignmentService',
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\AssignmentRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\AssignmentRepository',

    ],
    'entities' => [
        'ZnUser\\Rbac\\Domain\\Entities\\RoleEntity' => 'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\RoleRepositoryInterface',
        'ZnUser\\Rbac\\Domain\\Entities\\InheritanceEntity' => 'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\InheritanceRepositoryInterface',
        'ZnUser\\Rbac\\Domain\\Entities\\ItemEntity' => 'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\ItemRepositoryInterface',
        'ZnUser\\Rbac\\Domain\\Entities\\PermissionEntity' => 'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\PermissionRepositoryInterface',
        'ZnUser\\Rbac\\Domain\\Entities\\AssignmentEntity' => 'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\AssignmentRepositoryInterface',
    ],
];