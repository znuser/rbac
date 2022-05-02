<?php

namespace ZnUser\Rbac\Domain\Enums\Rbac;

use ZnCore\Base\Helpers\DeprecateHelper;
use ZnCore\Contract\Enum\Interfaces\GetLabelsInterface;

DeprecateHelper::softThrow();

class ApplicationRoleEnum implements GetLabelsInterface
{

    const GUEST = 'rGuest';
    const USER = 'rUser';
    const ADMINISTRATOR = 'rAdministrator';

    public static function getLabels()
    {
        return [
            self::GUEST => 'Гость системы',
            self::USER => 'Идентифицированный пользователь',
            self::ADMINISTRATOR => 'Администратор системы',
        ];
    }
}