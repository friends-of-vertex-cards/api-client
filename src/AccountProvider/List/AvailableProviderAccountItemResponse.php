<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountProvider\List;

use FriendsOfVertexCards\ApiClient\Enum\CardType;
use FriendsOfVertexCards\ApiClient\Enum\SupportedCardBalance;

/**
 * @psalm-api
 */
final class AvailableProviderAccountItemResponse
{
    /**
     * @param SupportedCardBalance[] $supportedBalances
     */
    public function __construct(
        public string $id,
        public string $currency,
        public CardType $type,
        public array $supportedBalances,
    ) {}
}
