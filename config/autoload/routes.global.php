<?php

use App\Middleware\Factory\GetShorteningMiddlewareFactory;
use App\Middleware\Factory\PostShorteningMiddlewareFactory;
use App\Middleware\GetShorteningMiddleware;
use App\Middleware\PostShorteningMiddleware;
use Zend\Expressive\Router\FastRouteRouter;
use Zend\Expressive\Router\RouterInterface;

return [
    'dependencies' => [
        'invokables' => [
            RouterInterface::class => FastRouteRouter::class,
        ],
        'factories' => [
            GetShorteningMiddleware::class => GetShorteningMiddlewareFactory::class,
            PostShorteningMiddleware::class => PostShorteningMiddlewareFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => GetShorteningMiddleware::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'shortened',
            'path' => '/shorten',
            'middleware' => PostShorteningMiddleware::class,
            'allowed_methods' => ['POST'],
        ],
    ],
];
