<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum CardTransactionType: string
{
    case Purchase = 'purchase';
    case Refund = 'refund';
    case Fee = 'fee';
    case TopUp = 'top_up';
    case Withdrawal = 'withdrawal';
}
