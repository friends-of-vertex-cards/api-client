<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Details;

use FriendsOfVertexCards\ApiClient\Enum\CardNetwork;
use FriendsOfVertexCards\ApiClient\Enum\CardStatus;
use FriendsOfVertexCards\ApiClient\Enum\CardTokenization;
use FriendsOfVertexCards\ApiClient\Enum\CardType;

/**
 * @psalm-api
 */
final class CardDetails
{
    /**
     * @param CardTokenization[] $cardTokenizations
     * @param CardLimit[]        $limits
     */
    public function __construct(
        public string $cardId,
        public string $name,
        public ?string $availableBalance,
        public ?string $spendedBalance,
        public string $currency,
        public ?string $holder,
        public array $cardTokenizations,
        public ?string $maskedNumber,
        public ?CardNetwork $paymentSystem,
        public ?CardType $cardType,
        public ?string $expiredAt,
        public CardStatus $status,
        public array $limits,
        public CardOwner $cardOwner,
        public string $createdAt,
        public string $updatedAt,
        public ?string $deletedAt,
    ) {}
}
