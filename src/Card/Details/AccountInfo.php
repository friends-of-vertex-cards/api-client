<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Details;

/**
 * @psalm-api
 */
final class AccountInfo
{
    public function __construct(
        public string $id,
        public string $name,
    ) {}
}
