<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\Create;

/**
 * @psalm-api
 */
final class AccountCreateData
{
    public function __construct(
        public string $id,
    ) {}
}
