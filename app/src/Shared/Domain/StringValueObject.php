<?php

namespace App\Shared\Domain;

abstract class StringValueObject
{
    protected function __construct(protected string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(self $other): bool
    {
        return $this->value() === $other->value();
    }

    public function __toString(): string
    {
        return $this->value();
    }
}