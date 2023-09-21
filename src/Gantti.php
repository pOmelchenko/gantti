<?php

namespace Gantti;

use DateTimeImmutable;

class Gantti
{
    private array $events;

    private DateTimeImmutable|null $first = null;
    private DateTimeImmutable|null $last = null;


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

        $this->parse();
    }

    private function parse(): void
    {
        foreach ($this->events as $event) {
            if ($this->first === null || $event->start < $this->first) {
                $this->first = $event->start;
            }

            if ($this->last === null || $event->end > $this->last) {
                $this->last = $event->end;
            }
        }
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
