<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum SupportedCardBalance: string
{
    case SharedAccountBalance = 'shared_account_balance';
    case PersonalCardBalance = 'personal_card_balance';
}
