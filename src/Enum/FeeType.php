<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

/**
 * @psalm-api
 */
enum FeeType: string
{
    case Percent = 'percent';
    case Amount = 'amount';
}
