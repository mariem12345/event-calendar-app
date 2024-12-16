<?php

namespace App\Events\List\Domain;

interface EventsListRepository
{
    public function searchAllEvents(): array;

}