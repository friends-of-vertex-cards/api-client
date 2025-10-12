<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\Init;

/**
 * @psalm-api
 */
final class TopUpInitResponse
{
    public function __construct(
        public TopUpInitData $data,
    ) {}
}
