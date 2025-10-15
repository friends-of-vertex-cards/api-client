<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\TopUpBalance;

/**
 * @psalm-api
 */
final class TopUpCardResponse
{
    public function __construct(
        public TopUpCardData $data,
    ) {}
}
