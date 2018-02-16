<?php

namespace App\Message;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Psr\Http\Message\ServerRequestInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Zend\Diactoros\Response\JsonResponse;

class Get implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $content = [
                [
                    "subject" => "Assunto",
                    "body" => "Corpo da mensagem"
                ],
                [
                    "subject" => "Assunto2",
                    "body" => "Corpo da mensagem2"
                ]
            ];
        return new JsonResponse($content);
    }
}