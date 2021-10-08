<?php

namespace ZnUser\Rbac\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class SystemRoleEnum implements GetLabelsInterface
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
}