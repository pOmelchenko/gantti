<?php

namespace Gantti;

class Gantti
{
    private array $events;

    private array $params = [
        'title' => false,
        'cellwidth' => 40,
        'cellheight' => 40,
        'today' => true,
    ];

    public function __construct(Events $events, array $params = [])
    {
        $this->events = $events->data;
        $this->params = array_merge($this->params, $params);
    }

    public function getEvents(): array
    {
        return $this->events;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}
