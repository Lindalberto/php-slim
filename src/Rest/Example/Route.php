<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 19/04/2019
 * Time: 19:32
 */

namespace Src\Rest\Example;


class Route
{

    public function __invoke($app)
    {
        $app->get('/example/[{id}]', Controller::class . ':fetch')
            ->setName('example');
    }
}