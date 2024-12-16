<?php

namespace App\Events\List\Infrastructure\Repositories;

use App\Events\List\Domain\EventsListRepository;
use App\Events\List\Infrastructure\Repositories\Presistence\Doctrine\DoctrineRepository;
use App\Events\Shared\Domain\Event;

class DoctrineEventsListRepository extends DoctrineRepository implements EventsListRepository
{

    public function searchAllEvents(): array
    {
        return $this->searchAll(Event::class);
    }
}