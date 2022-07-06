<?php

use ZnCore\Env\Helpers\EnvHelper;
use Psr\Container\ContainerInterface;
use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;
use ZnUser\Rbac\Domain\Interfaces\Services\ManagerServiceInterface;
use ZnUser\Rbac\Domain\Services\ManagerService;

$isDbDriver = true;
//$isDbDriver = !EnvHelper::isDev();

return [
    'singletons' => [
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\RoleRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\RoleRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_item.php' : __DIR__ . '/../../../../../../fixtures/rbac_item.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\RoleRepository');
                $repository->setFileName($fileName);
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\InheritanceRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\InheritanceRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_inheritance.php' : __DIR__ . '/../../../../../../fixtures/rbac_inheritance.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\InheritanceRepository');
                $repository->setFileName($fileName);
                return $repository;
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\ItemRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\ItemRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_item.php' : __DIR__ . '/../../../../../../fixtures/rbac_item.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\ItemRepository');
                $repository->setFileName($fileName);
            },
        'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\PermissionRepositoryInterface' => $isDbDriver
            ? 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\PermissionRepository'
            : function (ContainerInterface $container) {
                $fileName = $_ENV['FIXTURE_DIRECTORY'] ? $_ENV['FIXTURE_DIRECTORY'] . '/rbac_item.php' : __DIR__ . '/../../../../../../fixtures/rbac_item.php';
                $repository = $container->get('ZnUser\\Rbac\\Domain\\Repositories\\File\\PermissionRepository');
                $repository->setFileName($fileName);
            },

//        ManagerServiceInterface::class => function(ContainerInterface $container) {
//            /** @var ManagerService $managerService */
//            $managerService = $container->make(ManagerService::class);
//            $managerService->setDefaultRoles([SystemRoleEnum::GUEST]);
//            return $managerService;
//        },
    ],
    'entities' => [
        
	],
];