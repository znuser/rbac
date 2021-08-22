<?php

namespace ZnUser\Rbac\Domain\Factories;

use Casbin\Enforcer;
use Casbin\ManagementEnforcer;
use Casbin\Model\Model;
use Casbin\Persist\Adapters\FileAdapter;
use Casbin\Rbac\DefaultRoleManager\RoleManager;
use Casbin\Rbac\RoleManager as RoleManagerContract;
use Illuminate\Support\Collection;
use ZnCore\Domain\Helpers\EntityHelper;

class EnforcerFactory
{

    public function createEnforcerByInheritanceCollection(Collection $collection): ManagementEnforcer
    {
        $enforcer = $this->createEnforcer();
        $map = EntityHelper::collectionToArray($collection);
        $roleManager = $this->createRoleManager($map);
        $enforcer->setRoleManager($roleManager);
        //$enforcer->savePolicy();
        return $enforcer;
    }

    public function createEnforcerByMap($map): ManagementEnforcer
    {
        $enforcer = $this->createEnforcer();
        $roleManager = $this->createRoleManager($map);
        $enforcer->setRoleManager($roleManager);
        //$enforcer->savePolicy();
        return $enforcer;
    }

    public function createEnforcerByRoleManager(RoleManagerContract $roleManager): ManagementEnforcer
    {
        $enforcer = $this->createEnforcer();
        $enforcer->setRoleManager($roleManager);
        //$enforcer->savePolicy();
        return $enforcer;
    }

    private function createRoleManager($map): RoleManagerContract
    {
        $roleManager = new RoleManager(20);
        $this->configRoleManagerByMap($roleManager, $map);
        return $roleManager;
    }

    private function createEnforcer(): ManagementEnforcer
    {
//        $modelConfigFile = __DIR__ . "/../../../../../data/casbin/rbac_model.conf";
//        $policyConfigFile = __DIR__ . "/../../../../../data/casbin/rbac_policy.csv";
        $model = Model::newModel();
        //$model->loadModel($modelConfigFile);
        //$adapter = new FileAdapter($policyConfigFile);
        $enforcer = new Enforcer($model/*, $adapter*/);
        $enforcer->buildRoleLinks();
        $enforcer->enableAutoSave();
        return $enforcer;
    }

    private function configRoleManagerByMap(RoleManagerContract $roleManager, $map)
    {
        foreach ($map as $item) {
            $roleManager->addLink($item['parentName'], $item['childName']);
        }
    }
}