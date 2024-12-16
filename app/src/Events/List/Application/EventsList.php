<?php

namespace App\Events\List\Application;

use App\Events\List\Application\Response\EventResponse;
use App\Events\List\Application\Response\EventsResponse;
use App\Events\List\Domain\EventsListRepository;
use App\Events\Shared\Domain\Event;
use App\Events\Shared\Domain\Exception\EventsNotFoundException;

use function Lambdish\Phunctional\map;

final class EventsList
{
    public function __construct(private EventsListRepository $eventsListRepository)
    {
    }

    public function __invoke(): EventsResponse
    {
        $events = $this->eventsListRepository->searchAllEvents();
        if (empty($events)) {
            throw new EventsNotFoundException();
        }

        return new EventsResponse(...map($this->toResponse(), $events));
    }

    private function toResponse(): callable
    {
        return static fn (Event $event) => new EventResponse(
            $event->id->value(),
            $event->name->value(),
            $event->description->value(),
            $event->date->value(),
        );
    }
}