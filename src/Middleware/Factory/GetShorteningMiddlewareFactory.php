<?php

namespace App\Middleware\Factory;

use App\Middleware\GetShorteningMiddleware;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class GetShorteningMiddlewareFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new GetShorteningMiddleware($template);
    }
}
