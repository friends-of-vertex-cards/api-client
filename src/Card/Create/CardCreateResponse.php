<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Create;

/**
 * @psalm-api
 */
final class CardCreateResponse
{
    public function __construct(
        public CardCreateData $data,
    ) {}
}
