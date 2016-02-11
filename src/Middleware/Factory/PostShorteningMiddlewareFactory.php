<?php

namespace App\Middleware\Factory;

use App\Middleware\PostShorteningMiddleware;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class PostShorteningMiddlewareFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new PostShorteningMiddleware($template);
    }
}
