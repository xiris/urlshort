<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\Stratigility\MiddlewareInterface;

/**
 * @author Fábio Carneiro <fabio.silva@carmudi.com>
 */
class PostShorteningMiddleware implements MiddlewareInterface
{
    private $template;

    public function __construct(TemplateRendererInterface $template = null)
    {
        $this->template = $template;
    }

    public function __invoke(Request $request, Response $response, callable $out = null)
    {
        return new HtmlResponse($this->template->render('app::home-page'));
    }
}
