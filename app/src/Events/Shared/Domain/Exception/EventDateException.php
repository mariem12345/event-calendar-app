<?php

namespace App\Events\Shared\Domain\Exception;

use InvalidArgumentException;

class EventDateException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Event date should be in the future');
    }

}