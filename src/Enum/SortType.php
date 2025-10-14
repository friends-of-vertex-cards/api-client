<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

/**
 * @psalm-api
 */
enum SortType: string
{
    case Asc = 'asc';
    case Desc = 'desc';
}
