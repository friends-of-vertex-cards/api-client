<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\List;

use FriendsOfVertexCards\ApiClient\Enum\AccountTransactionType;
use FriendsOfVertexCards\ApiClient\Enum\TransactionStatus;

/**
 * @psalm-api
 */
final class AccountTransactionItemResponse
{
    public function __construct(
        public string $id,
        public string $accountId,
        public string $settlementAmount,
        public string $settlementCurrency,
        public TransactionStatus $status,
        public AccountTransactionType $type,
        public string $createdAt,
    ) {}
}
