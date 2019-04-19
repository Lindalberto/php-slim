<?php

namespace Src\Main;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Container;

abstract class Rest
{
    protected $container;
    protected $view;

    /**
     * Rest constructor.
     * @param Container $container
     * @throws \Interop\Container\Exception\ContainerException
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->view      = $container->get('renderer');
    }

    /**
     * getter mágico para acessar o container do slim.
     * @param $name
     * @return mixed
     * @throws \Interop\Container\Exception\ContainerException
     */
    public function __get($name){
        return $this->container->get($name);
    }

    abstract public function put(ServerRequestInterface $request, ResponseInterface $response, $args);

    abstract public function post(ServerRequestInterface $request, ResponseInterface $response, $args);

    abstract public function delete(ServerRequestInterface $request, ResponseInterface $response, $args);

    abstract public function fetch(ServerRequestInterface $request, ResponseInterface $response, $args);

    abstract public function fetchAll(ServerRequestInterface $request, ResponseInterface $response, $args);
}