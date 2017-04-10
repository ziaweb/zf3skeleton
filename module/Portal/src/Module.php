<?php

namespace Portal;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface, BootstrapListenerInterface {
    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }
    public function onBootstrap(EventInterface $e) {
        return;
    }
}

