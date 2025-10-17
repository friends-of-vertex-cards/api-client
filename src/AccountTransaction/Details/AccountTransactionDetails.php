<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\Details;

use FriendsOfVertexCards\ApiClient\Enum\AccountTransactionType;

/**
 * @psalm-api
 */
final class AccountTransactionDetails
{
    public function __construct(
        public string $sourceAccountId,
        public AccountTransactionType $type,
        public ?string $transactionAt,
    ) {}
}
