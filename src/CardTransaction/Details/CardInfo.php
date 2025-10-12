<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\Details;

/**
 * @psalm-api
 */
final class CardInfo
{
    public function __construct(
        public string $id,
        public string $maskedNumber,
        public string $name,
    ) {}
}
