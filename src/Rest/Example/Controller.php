<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 19/04/2019
 * Time: 19:32
 */

namespace Src\Rest\Example;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Src\Main\Rest;
use Src\Service\Example;
use Src\Service\Exception as ServiceException;

class Controller extends Rest
{

    public function put(ServerRequestInterface $request, ResponseInterface $response, $args){}

    public function post(ServerRequestInterface $request, ResponseInterface $response, $args){}

    public function checkEmail(ServerRequestInterface $request, ResponseInterface $response, $args){}

    public function fetch(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        try {
            return $response->withJson((new Example())->doSomething($args['id']));
        } catch (ServiceException $se) {
            return $response->withJson(['message' => $se->getMessage()], 409);
        }
    }

    public function delete(ServerRequestInterface $request, ResponseInterface $response, $args){}

    public function fetchAll(ServerRequestInterface $request, ResponseInterface $response, $args){}
}