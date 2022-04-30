<?php

namespace ZnUser\Rbac\Domain\Helpers;

use ZnCore\Base\Legacy\Yii\Helpers\ArrayHelper;
use ZnCore\Base\Libs\App\Helpers\ContainerHelper;
use ZnCore\Base\Libs\App\Interfaces\ConfigManagerInterface;

class RbacConfigHelper
{

    public static function getAll(): array {
        $collection = [];
        $routesPath = self::getRoutesPath();
        foreach ($routesPath as $file) {
            $routes = include $file;
            $collection = ArrayHelper::merge($collection, $routes);
        }
        return $collection;
    }

    private static function getRoutesPath(): array {
        $routes = self::getConfigManager()->get('rbacConfig');
//        $routes = $_ENV['RPC_ROUTES'];
        return $routes;
    }
    
    private static function getConfigManager(): ConfigManagerInterface {
        return ContainerHelper::getContainer()->get(ConfigManagerInterface::class);
    }
}
