<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

/**
 * @psalm-api
 */
enum CardSortBy: string
{
    case CreatedAt = 'createdAt';
    case Name = 'name';
    case Status = 'status';
}
