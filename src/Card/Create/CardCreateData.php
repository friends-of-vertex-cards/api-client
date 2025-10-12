<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Create;

/**
 * @psalm-api
 */
final class CardCreateData
{
    public function __construct(
        public string $id,
    ) {}
}
