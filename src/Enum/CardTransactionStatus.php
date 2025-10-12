<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum CardTransactionStatus: string
{
    case Authorized = 'authorized';
    case Canceled = 'canceled';
    case Declined = 'declined';
    case Completed = 'completed';
}
