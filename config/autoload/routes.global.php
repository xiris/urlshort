<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            App\Middleware\GetShorteningMiddleware::class => \App\Middleware\Factory\GetShorteningMiddlewareFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Middleware\GetShorteningMiddleware::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
