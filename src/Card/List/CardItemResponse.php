<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\List;

use FriendsOfVertexCards\ApiClient\Enum\CardNetwork;
use FriendsOfVertexCards\ApiClient\Enum\CardStatus;
use FriendsOfVertexCards\ApiClient\Enum\CardType;

/**
 * @psalm-api
 */
final class CardItemResponse
{
    public function __construct(
        public string $cardId,
        public string $name,
        public string $currency,
        public ?string $availableBalance,
        public ?string $holder,
        public ?CardType $cardType,
        public ?string $maskedNumber,
        public ?CardNetwork $paymentSystem,
        public ?string $expiredAt,
        public CardStatus $cardStatus,
    ) {}
}
