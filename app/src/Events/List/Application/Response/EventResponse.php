<?php

namespace App\Events\List\Application\Response;

final class EventResponse
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description,
        public string $date,
    ) {
    }
}