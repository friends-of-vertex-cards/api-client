<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum CardStatus: string
{
    case Creating = 'creating';
    case CreatingFailed = 'creating_failed';
    case Active = 'active';
    case Frozen = 'frozen';
    case Closed = 'closed';
    case Blocked = 'blocked';
    case Expired = 'expired';
}
