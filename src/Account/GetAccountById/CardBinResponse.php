<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById;

use FriendsOfVertexCards\ApiClient\Enum\CardNetwork;

/**
 * @psalm-api
 */
final readonly class CardBinResponse
{
    /**
     * @param string[] $cardTokenizations
     */
    public function __construct(
        public string $bin,
        public CardNetwork $cardNetwork,
        public string $issuerCountry,
        public array $cardTokenizations,
        public string $cardProviderBinId,
    ) {}
}
