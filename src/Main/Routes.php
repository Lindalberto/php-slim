<?php
/**
 * Created by PhpStorm.
 * User: LindalbertoFilho
 * Date: 20/11/2018
 * Time: 22:04
 */

namespace Src\Main;


use Slim\Http\Request;
use Slim\Http\Response;

class Routes
{

    public function __invoke($app)
    {
        $app->get('/[{name}]', function (Request $request, Response $response, array $args) {
            // Sample log message
            $this->logger->info("Slim-Skeleton '/' route");

            // Render index view
            return $this->renderer->render($response, 'index.phtml', $args);
        });
    }
}