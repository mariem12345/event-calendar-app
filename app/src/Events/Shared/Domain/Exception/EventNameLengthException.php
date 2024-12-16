<?php

namespace App\Events\Shared\Domain\Exception;

use InvalidArgumentException;

class EventNameLengthException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Event name cannot be longer than 50 characters.');
    }
}