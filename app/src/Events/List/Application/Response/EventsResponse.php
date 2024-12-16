<?php

namespace App\Events\List\Application\Response;

final class EventsResponse
{
    private array $events;

    public function __construct(EventResponse ...$events)
    {
        $this->events = $events;
    }

    public function events(): array
    {
        return $this->events;
    }
}