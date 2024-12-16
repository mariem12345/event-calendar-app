<?php

namespace App\Events\List\Infrastructure\Repositories;

use App\Events\List\Domain\EventsListRepository;
use App\Events\Shared\Domain\Event;

class DummyEventsListRepository implements EventsListRepository
{
    private array $events = [];

    public function __construct()
    {
        $this->events = [
            Event::create('1', 'Event 1', 'Event 1, is an important event that should be attended', '2025-01-15 14:00:00.000000'),
            Event::create('2', 'Event 2', 'Event 2, is an important event that should be attended', '2025-02-15 14:00:00.000000'),
            Event::create('3', 'Event 3', 'Event 3, is an important event that should be attended', '2025-03-15 14:00:00.000000'),
            Event::create('4', 'Event 4', 'Event 4, is an important event that should be attended', '2025-04-15 14:00:00.000000'),
        ];
    }

    public function searchAllEvents(): array
    {
        return $this->events;
    }
}