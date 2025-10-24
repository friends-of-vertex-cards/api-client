<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\List;

use FriendsOfVertexCards\ApiClient\Enum\CardTransactionType;
use FriendsOfVertexCards\ApiClient\Enum\TransactionStatus;

/**
 * @psalm-api
 */
final class CardTransactionItemResponse
{
    public function __construct(
        public string $id,
        public string $cardId,
        public string $accountId,
        public string $amount,
        public string $currency,
        public ?string $feeAmount,
        public ?string $feeCurrency,
        public string $settlementAmount,
        public string $settlementCurrency,
        public TransactionStatus $status,
        public CardTransactionType $type,
        public string $authorizedBy,
        public ?string $merchantName,
        public ?string $merchantCountry,
        public ?string $rrn,
        public ?string $authorizationCode,
        public ?string $declineReason,
        public ?string $mcc,
        public ?string $parentId,
        public string $transactionAt,
        public string $createdAt,
    ) {}
}
