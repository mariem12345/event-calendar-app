<?php

namespace App\Events\Shared\Domain;

use App\Events\Shared\Domain\Exception\EventDateException;
use App\Shared\Domain\DateValueObject;

final class EventDate extends DateValueObject
{
    public function __construct(protected \DateTime $value)
    {
        parent::__construct($value);
        $this->ensureIsValidDate();
    }

    private function ensureIsValidDate(): void
    {
        $now = new \DateTime('now');
        if ($this->value() > $now) {
            throw new EventDateException();
        }
    }
}