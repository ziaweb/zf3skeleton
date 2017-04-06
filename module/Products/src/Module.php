<?php

namespace Products;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigInterface
{
    public function getConfig(){
        return include __DIR__ . '/../config/module.config.php';
    }
}