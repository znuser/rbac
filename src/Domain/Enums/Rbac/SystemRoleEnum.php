<?php

namespace ZnUser\Rbac\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;
use ZnCore\Contract\Rbac\Interfaces\GetRbacInheritanceInterface;

class SystemRoleEnum implements GetLabelsInterface, GetRbacInheritanceInterface
{

    const GUEST = 'rGuest';
    const USER = 'rUser';
    const ADMINISTRATOR = 'rAdministrator';
    const ROOT = 'rRoot';

    public static function getLabels()
    {
        return [
            self::GUEST => 'Гость системы',
            self::USER => 'Идентифицированный пользователь',
            self::ADMINISTRATOR => 'Администратор системы',
            self::ROOT => 'Корневой администратор системы',
        ];
    }

    public static function getInheritance()
    {
        return [
            self::USER => [
                self::GUEST,
            ],
            self::ADMINISTRATOR => [
                self::USER,
            ],
            self::ROOT => [
                self::ADMINISTRATOR,
            ],
        ];
    }
}