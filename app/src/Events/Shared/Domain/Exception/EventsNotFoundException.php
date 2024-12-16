<?php

namespace App\Events\Shared\Domain\Exception;

use RuntimeException;

class EventsNotFoundException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Events not found.');
    }
}