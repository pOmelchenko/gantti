<?php

namespace Gantti;

Enum DefaultEventClass: string implements EventClass
{
    case Important = 'important';
    case Urgent = 'urgent';
}
