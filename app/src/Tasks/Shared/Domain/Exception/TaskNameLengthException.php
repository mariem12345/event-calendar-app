<?php

namespace App\Tasks\Shared\Domain\Exception;

use InvalidArgumentException;

class TaskNameLengthException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Task name cannot be longer than 50 characters.');
    }

}