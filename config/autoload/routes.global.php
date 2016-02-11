<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            App\Middleware\PingAction::class => App\Middleware\PingAction::class,
        ],
        'factories' => [
            App\Middleware\GetShorteningMiddleware::class => App\Middleware\HomePageFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Middleware\GetShorteningMiddleware::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => App\Middleware\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
