<?php

namespace ZfSnapGoogle\Services;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ServiceAbstractFactory
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class ServiceAbstractFactory implements AbstractFactoryInterface
{

    const SERVICE_PREFIX = 'Google_Service_';
    const SERVICE_PREFIX_LENGTH = 15;
    const SERVICE_BASE_CLASS = 'Google_Service';

    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $requestedPrefix = substr($requestedName, 0, self::SERVICE_PREFIX_LENGTH);
        $isStarts = $requestedPrefix === self::SERVICE_PREFIX;

        return $isStarts && is_subclass_of($requestedName, 'Google_Service');
    }

    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $client = $serviceLocator->get('Google\Client');

        return new $requestedName($client);
    }

}
