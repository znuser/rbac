<?php

namespace ZnUser\Rbac\Domain\Libs\BundleLoaders;

use ZnCore\Base\Libs\Arr\Helpers\ArrayHelper;
use ZnCore\Base\Libs\ConfigManager\Interfaces\ConfigManagerInterface;
use ZnCore\Base\Libs\App\Loaders\BundleLoaders\BaseLoader;

class RbacConfigLoader extends BaseLoader
{

//    public function __construct(ConfigManagerInterface $configManager)
//    {
//        $this->setConfigManager($configManager);
//    }

    public function loadAll(array $bundles): array
    {
        $config = [];
        foreach ($bundles as $bundle) {
            $loadedConfig = $this->load($bundle);
            $config = ArrayHelper::merge($config, $loadedConfig);
        }
        $this->getConfigManager()->set('rbacConfig', $config);
        return [];
    }
}
