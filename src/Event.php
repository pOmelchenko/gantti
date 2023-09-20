<?php

namespace Gantti;

use DateTimeImmutable;

class Event
{
    public function __construct(
        readonly public string $label,
        readonly public DateTimeImmutable $start,
        readonly public DateTimeImmutable $end,
        readonly public EventClass $class,
    ) {
        // ...
    }
}
