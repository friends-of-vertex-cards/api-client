<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetRestrictions;

/**
 * @psalm-api
 */
final class CardRestrictionsData
{
    /**
     * @param CardLimit[] $limits
     * @param BinInfo[]   $binList
     */
    public function __construct(
        public array $limits,
        public array $binList,
        public bool $cardBalance,
    ) {}
}
