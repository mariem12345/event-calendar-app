<?php

namespace App\Shared\Domain;

class DateValueObject
{
    public function __construct(protected \DateTime $value)
    {
        $this->ensureIsValidDate();
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

    private function ensureIsValidDate(): void
    {
        if (!($this->value instanceof \DateTime)) {
            throw new \InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $this->value)
            );
        }
    }
}