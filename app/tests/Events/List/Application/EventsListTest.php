<?php

namespace App\Tests\Events\List\Application;

use App\Events\List\Application\EventsList;
use App\Events\List\Application\Response\EventResponse;
use App\Events\List\Application\Response\EventsResponse;
use App\Events\List\Domain\EventsListRepository;
use App\Events\Shared\Domain\Event;
use App\Events\Shared\Domain\EventDate;
use App\Events\Shared\Domain\EventDescription;
use App\Events\Shared\Domain\EventId;
use App\Events\Shared\Domain\EventName;
use PHPUnit\Framework\TestCase;

class EventsListTest extends TestCase
{
    public function test_should_return_list_of_events(): void
    {
        $eventRepository = $this->createMock(EventsListRepository::class);
        $eventRepository->expects(self::once())
            ->method('searchAllEvents')
            ->with()
            ->willReturn([
                Event::create(
                    new EventId('2b345f97-af90-419c-9d29-13420af52879'),
                    new EventName('event 1'),
                    new EventDescription('test event 1 description is here'),
                    new EventDate(new \DateTime('2025-01-15 14:00:00.000000'))
                ),
                Event::create(
                    new EventId('8e707df4-1b30-41a4-887a-bb3abb83c929'),
                    new EventName('event 2'),
                    new EventDescription('test event 2 description is here'),
                    new EventDate(new \DateTime('2025-01-15 14:00:00.000000'))
                )
            ]);

        $eventsList = new EventsList($eventRepository);
        $result = $eventsList();

        self::assertInstanceOf(EventsResponse::class, $result);
        self::assertContainsOnlyInstancesOf(EventResponse::class, $result->events());
        self::assertEquals($result->events()[0]->id, '2b345f97-af90-419c-9d29-13420af52879');
        self::assertEquals($result->events()[1]->id, '8e707df4-1b30-41a4-887a-bb3abb83c929');
        self::assertEquals($result->events()[0]->name, 'event 1');
    }


}