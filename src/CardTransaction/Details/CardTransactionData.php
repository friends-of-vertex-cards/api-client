<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\Details;

use FriendsOfVertexCards\ApiClient\Enum\CardTransactionStatus;

/**
 * @psalm-api
 */
final class CardTransactionData
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
        public CardTransactionStatus $status,
        public string $createdAt,
        public string $updatedAt,
        public CardTransactionDetails $transactionDetails,
    ) {}
}
