<?php

namespace Gantti\Tests;

use Gantti\Event;
use Gantti\DefaultEventClass;
use Gantti\Events;
use Gantti\Gantti;
use PHPUnit\Framework\TestCase;

class GanttiTest extends TestCase
{
    private Gantti $gantti;

    protected function setUp(): void
    {
        $this->gantti = new Gantti(
            events: new Events(...[
                new Event(
                    label: 'First event',
                    start: $start = new \DateTimeImmutable('now'),
                    end: (clone $start)->modify('+1 day'),
                    class: DefaultEventClass::Important,
                ),
                new Event(
                    label: 'Second event',
                    start: $start = new \DateTimeImmutable('+2 days'),
                    end: (clone $start)->modify('+1 day'),
                    class: DefaultEventClass::Urgent,
                ),
            ]),
            params: [
                'key' => 'value'
            ]
        );
    }

    public function testGetParams(): void
    {
        $this->markTestIncomplete('WIP');
    }

    public function testGetData(): void
    {
        self::assertEquals('First event', $this->gantti->getEvents()[0]->label);
        self::assertEquals('Second event', $this->gantti->getEvents()[1]->label);
    }
}
