<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetRestrictions;

/**
 * @psalm-api
 */
final class CardRestrictionsResponse
{
    public function __construct(
        public CardRestrictionsData $data,
    ) {}
}
