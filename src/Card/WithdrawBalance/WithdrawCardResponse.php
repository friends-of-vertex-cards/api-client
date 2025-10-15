<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\WithdrawBalance;

/**
 * @psalm-api
 */
final class WithdrawCardResponse
{
    public function __construct(
        public WithdrawCardData $data,
    ) {}
}
