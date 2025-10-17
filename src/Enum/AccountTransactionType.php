<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum AccountTransactionType: string
{
    case Payin = 'payin';
    case CardIssuing = 'card_issuing';
    case TransferFee = 'transfer_fee';
    case Withdrawal = 'withdrawal';
}
