<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 19/04/2019
 * Time: 19:30
 */

namespace Src\Service;

use \Exception as MainException;

class Exception extends MainException
{
    // Redefine a exceção de forma que a mensagem não seja opcional
    public function __construct($message, $code = 0, MainException $previous = null)
    {
        // código

        // garante que tudo está corretamente inicializado
        parent::__construct($message, $code, $previous);
    }

    // personaliza a apresentação do objeto como string
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}