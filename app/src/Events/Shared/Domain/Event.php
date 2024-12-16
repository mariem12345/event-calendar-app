<?php

namespace App\Events\Shared\Domain;

final class Event
{
    private function __construct(
        public EventId $id,
        public EventName $name,
        public EventDescription $description,
        public EventDate $date,
    ) {
    }
    public static function create(
        EventId $id,
        EventName $name,
        EventDescription $description,
        EventDate $date,
    ): self {
        return new self($id, $name, $description, $date);
    }
}