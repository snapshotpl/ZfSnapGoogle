<?php

namespace ZfSnapGoogle;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Module
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }

    public function getConfig()
    {
        return require __DIR__ . '/../config/module.config.php';
    }

}
