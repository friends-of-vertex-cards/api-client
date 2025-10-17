<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum TransactionStatus: string
{
    case Authorized = 'authorized';
    case Canceled = 'canceled';
    case Declined = 'declined';
    case Completed = 'completed';
}
