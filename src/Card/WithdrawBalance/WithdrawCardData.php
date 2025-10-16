<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\WithdrawBalance;

/**
 * @psalm-api
 */
final class WithdrawCardData
{
    public function __construct(
        public string $fromTransactionId,
        public string $toTransactionId,
    ) {}
}
