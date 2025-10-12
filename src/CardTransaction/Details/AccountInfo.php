<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\Details;

/**
 * @psalm-api
 */
final class AccountInfo
{
    public function __construct(
        public string $accountId,
        public string $accountName,
    ) {}
}
