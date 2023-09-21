<?php

namespace Gantti;

class Events
{
    readonly array $data;

    public function __construct(Event ...$events)
    {
        $this->data = $events;
    }
}
