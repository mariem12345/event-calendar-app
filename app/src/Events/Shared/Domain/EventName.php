<?php

namespace App\Events\Shared\Domain;

use App\Events\Shared\Domain\Exception\EventNameLengthException;
use App\Shared\Domain\StringValueObject;

final class EventName extends StringValueObject
{
    public function __construct(protected string $value)
    {
        parent::__construct($value);
        $this->ensureIsValidateLength();
    }

    private function ensureIsValidateLength(): void
    {
        if (strlen($this->value()) > 50) {
            throw new EventNameLengthException();
        }
    }
}