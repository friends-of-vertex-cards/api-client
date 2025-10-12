<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum LimitType: string
{
    case Daily = 'daily_limit';
    case Weekly = 'weekly_limit';
    case Monthly = 'monthly_limit';
    case Year = 'year_limit';
    case Lifetime = 'lifetime_limit';
    case Transaction = 'transaction_limit';
}
