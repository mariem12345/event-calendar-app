<?php

namespace App\Tasks\Shared\Domain;

use App\Shared\Domain\StringValueObject;
use App\Tasks\Shared\Domain\Exception\TaskNameLengthException;

class TaskName extends StringValueObject
{
    public function __construct(protected string $value)
    {
        parent::__construct($value);
        $this->ensureIsValidateLength();
    }

    private function ensureIsValidateLength(): void
    {
        if (strlen($this->value()) > 50) {
            throw new TaskNameLengthException();
        }
    }
}