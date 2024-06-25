<?php

namespace ScreenMatch\Exception;

use InvalidArgumentException;

class NotaInvalidaException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct("nota precisa ser um numero entre 0 e 10");
    }
}