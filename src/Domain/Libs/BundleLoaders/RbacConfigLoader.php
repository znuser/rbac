<?php

namespace ZnUser\Rbac\Domain\Libs\BundleLoaders;

use ZnCore\Bundle\Base\BaseLoader;
use ZnCore\Arr\Helpers\ArrayHelper;

class RbacConfigLoader extends BaseLoader
{

    public function loadAll(array $bundles): void
    {
        $config = [];
        foreach ($bundles as $bundle) {
            $loadedConfig = $this->load($bundle);
            $config = ArrayHelper::merge($config, $loadedConfig);
        }
        $this->getConfigManager()->set('rbacConfig', $config);
    }
}
