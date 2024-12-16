<?php

namespace App\Events\Shared\Domain\Exception;

use InvalidArgumentException;

class EventDescriptionLengthException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Event description cannot be shorter than 10 characters.');
    }
}