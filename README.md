# ZfSnapGoogle
Google API client for Zend Framework 2

Module uses official Google SDK as dependency.

## Usage

```php
$youtube = $serviceManager->get('Google_Service_YouTube');
$result = $youtube->search->listSearch('id', [
    'q' => 'Google',
    'maxResults' => 10,
    'videoEmbeddable' => 'true',
    'type' => 'video',
]);
```

## How to install?

Via [composer.json](https://getcomposer.org/)
```json
{
  "require": {
    "snapshotpl/zf-snap-google": "0.9.*"
  }
}
```

and add module `ZfSnapGoogle` to `application.config.php`.

Configure your Google credentials by settings developer key:

```php
return [
    'google' => [
        'client' => [
            'developer_key' => null,
        ],
    ],
];
```

[Where can I get Google developer key?](https://code.google.com/apis/console)