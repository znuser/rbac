<?php

namespace ZnUser\Rbac\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;
use ZnCore\Contract\Rbac\Interfaces\GetRbacInheritanceInterface;
use ZnCore\Contract\Rbac\Traits\CrudRbacInheritanceTrait;

class RbacItemEnum implements GetLabelsInterface, GetRbacInheritanceInterface
{

    use CrudRbacInheritanceTrait;

    const CRUD = 'oRbacItemCrud';
    const ALL = 'oRbacItemAll';
    const ONE = 'oRbacItemOne';
    const CREATE = 'oRbacItemCreate';
    const UPDATE = 'oRbacItemUpdate';
    const DELETE = 'oRbacItemDelete';
//    const RESTORE = 'oRbacItemRestore';

    public static function getLabels()
    {
        return [
            self::CRUD => 'RBAC роли и полномочия. Полный доступ',
            self::ALL => 'RBAC роли и полномочия. Просмотр списка',
            self::ONE => 'RBAC роли и полномочия. Просмотр записи',
            self::CREATE => 'RBAC роли и полномочия. Создание',
            self::UPDATE => 'RBAC роли и полномочия. Редактирование',
            self::DELETE => 'RBAC роли и полномочия. Удаление',
//            self::RESTORE => 'RBAC item. Восстановление',
        ];
    }
}