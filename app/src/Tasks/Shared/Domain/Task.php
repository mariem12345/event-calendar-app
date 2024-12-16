<?php

namespace App\Tasks\Shared\Domain;

class Task
{
    private function __construct(
        public TaskId $id,
        public TaskName $name,
        public TaskDescription $description,
        public TaskDate $date,
    ) {
    }
    public static function create(
        TaskId $id,
        TaskName $name,
        TaskDescription $description,
        TaskDate $date,
    ): self {
        return new self($id, $name, $description, $date);
    }
}