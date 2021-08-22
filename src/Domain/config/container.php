<?php

return [
	'singletons' => [
		'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\RoleServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\RoleService',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\RoleRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\RoleRepository',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\ManagerServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\ManagerService',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\InheritanceServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\InheritanceService',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\InheritanceRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\InheritanceRepository',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\ManagerRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\File\\ManagerRepository',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\ItemServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\ItemService',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\ItemRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\ItemRepository',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Services\\PermissionServiceInterface' => 'ZnUser\\Rbac\\Domain\\Services\\PermissionService',
		'ZnUser\\Rbac\\Domain\\Interfaces\\Repositories\\PermissionRepositoryInterface' => 'ZnUser\\Rbac\\Domain\\Repositories\\Eloquent\\PermissionRepository',
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