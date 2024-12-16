<?php

namespace App\Events\Shared\Domain;

use App\Events\Shared\Domain\Exception\EventDescriptionLengthException;
use App\Shared\Domain\StringValueObject;

class EventDescription extends StringValueObject
{
    public function __construct(protected string $value)
    {
        parent::__construct($value);
        $this->ensureIsValidateLength();
    }

    private function ensureIsValidateLength(): void
    {
        if (strlen($this->value()) < 10) {
            throw new EventDescriptionLengthException();
        }
    }
}