<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\Details;

use FriendsOfVertexCards\ApiClient\Enum\CardTransactionType;

/**
 * @psalm-api
 */
final class CardTransactionDetails
{
    public function __construct(
        public CardInfo $card,
        public ?string $merchantName,
        public ?string $merchantCountry,
        public CardTransactionType $type,
        public ?string $rrn,
        public ?string $authorizationCode,
        public ?string $authorizedBy,
        public ?string $declineReason,
        public ?string $transactionAt,
    ) {}
}
