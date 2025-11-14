<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetRestrictions;

use FriendsOfVertexCards\ApiClient\Enum\CardNetwork;
use FriendsOfVertexCards\ApiClient\Enum\CardTokenization;

/**
 * @psalm-api
 */
final class BinInfo
{
    /**
     * @param CardTokenization[] $cardTokenizations
     * @param string[]           $categoryIds
     * @param string[]           $tags
     */
    public function __construct(
        public string $bin,
        public CardNetwork $cardNetwork,
        public string $issuerCountry,
        public array $cardTokenizations,
        public string $cardProviderBinId,
        public array $categoryIds,
        public array $tags,
    ) {}
}
