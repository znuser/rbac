<?php

namespace ZnUser\Rbac\Domain\Libs;

use ZnCore\Base\Legacy\Yii\Helpers\FileHelper;
use ZnUser\Rbac\Domain\Interfaces\InheritanceMapInterface;

class InheritanceMap implements InheritanceMapInterface
{

    private $roleEnums;
    private $permissionEnums;
    private $map;

    public function __construct(string $configFile = null)
    {
        if($configFile) {
            $config = FileHelper::loadData($configFile);
            $this->setConfig($config);
        }
    }

    public function roleEnums()
    {
        return $this->roleEnums;
    }

    public function permissionEnums()
    {
        return $this->permissionEnums;
    }

    public function map()
    {
        return $this->map;
    }

    public function setConfig(array $config) {
        $this->roleEnums = $config['roleEnums'];
        $this->permissionEnums = $config['permissionEnums'];
        $this->map = $config['inheritance'];
    }
}
