<?php

namespace Gantti;

Enum DefaultEventClass: string implements EventClass
{
    case Default = 'default';
    case Important = 'important';
    case Urgent = 'urgent';
}
