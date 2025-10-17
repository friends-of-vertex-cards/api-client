<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\Details;

use FriendsOfVertexCards\ApiClient\CardTransaction\Details\AccountInfo;
use FriendsOfVertexCards\ApiClient\Enum\TransactionStatus;

/**
 * @psalm-api
 */
final class AccountTransactionData
{
    public function __construct(
        public string $id,
        public AccountInfo $account,
        public string $amount,
        public string $currency,
        public ?string $feeAmount,
        public ?string $feeCurrency,
        public string $settlementAmount,
        public string $settlementCurrency,
        public ?string $description,
        public TransactionStatus $status,
        public string $createdAt,
        public string $updatedAt,
        public AccountTransactionDetails $transactionDetails,
    ) {}
}
