<?php

namespace ZnUser\Rbac\Domain\Helpers;

use ZnCore\Base\Legacy\Yii\Helpers\ArrayHelper;
use ZnCore\Base\Libs\Container\Helpers\ContainerHelper;
use ZnCore\Base\Libs\ConfigManager\Interfaces\ConfigManagerInterface;

class RbacConfigHelper
{

    public static function getAll(): array
    {
        $collection = [];
        $configFiles = self::getConfig();
        foreach ($configFiles as $file) {
            $routes = include $file;
            $collection = ArrayHelper::merge($collection, $routes);
        }
        return $collection;
    }

    private static function getConfig(): array
    {
        return self::getConfigManager()->get('rbacConfig');
    }

    private static function getConfigManager(): ConfigManagerInterface
    {
        return ContainerHelper::getContainer()->get(ConfigManagerInterface::class);
    }
}
