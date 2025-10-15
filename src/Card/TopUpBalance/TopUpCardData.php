<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\TopUpBalance;

/**
 * @psalm-api
 */
final class TopUpCardData
{
    public function __construct(
        public string $fromTransactionId,
        public string $toTransactionId,
    ) {}
}
