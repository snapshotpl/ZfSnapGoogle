<?php

return [
    'google' => [
        'client' => [
            'application_name' => 'ZfSnapGoogle',
            'developer_key' => null,
        ],
    ],
    'service_manager' => [
        'factories' => [
            'Google\Client' => 'ZfSnapGoogle\ClientFactory',
        ],
        'abstract_factories' => [
            'ZfSnapGoogle\Services\ServiceAbstractFactory',
        ],
    ],
];