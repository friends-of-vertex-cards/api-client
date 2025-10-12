<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\Init;

/**
 * @psalm-api
 */
final class TopUpInitData
{
    public function __construct(
        public string $id,
        public string $paymentAddress,
    ) {}
}
