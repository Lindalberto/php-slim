<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 19/04/2019
 * Time: 19:45
 */

namespace Src\Service;


class Example
{

    public function doSomething($id)
    {
        if (!$id) {
            throw new Exception("Id não informado.");
        }

        return ['body' => 'blabla'];
    }
}