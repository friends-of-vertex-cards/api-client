<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum CardType: string
{
    case Virtual = 'virtual';
    case Physical = 'physical';
}
