<?php

namespace Gantti\Calendar;

class Iterator implements \Iterator
{
    private int $position = 0;

    public function __construct(private array $data)
    {
    }

    /**
     * @inheritDoc
     */
    public function current(): mixed
    {
        return $this->data[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        $this->position++;
    }

    /**
     * @inheritDoc
     */
    public function key(): mixed
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        return isset($this->data[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->position = 0;
    }
}
