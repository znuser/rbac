<?php

namespace ZnUser\Rbac\Domain\Libs\BundleLoaders;

use ZnCore\Base\Arr\Helpers\ArrayHelper;
use ZnCore\Base\ConfigManager\Interfaces\ConfigManagerInterface;
use ZnCore\Base\App\Loaders\BundleLoaders\BaseLoader;

class RbacConfigLoader extends BaseLoader
{

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
