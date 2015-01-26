<?php

namespace ZfSnapGoogle;

use Google_Client as GoogleClient;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ClientFactory
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 */
class ClientFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        $clientConfig = $config['google']['client'];
        $developerKey = $clientConfig['developer_key'];

        if ($developerKey === null) {
            throw new \Exception('Developer key is missing');
        }

        $client = new GoogleClient();
        $client->setApplicationName($clientConfig['application_name']);
        $client->setDeveloperKey($developerKey);

        return $client;
    }

}
