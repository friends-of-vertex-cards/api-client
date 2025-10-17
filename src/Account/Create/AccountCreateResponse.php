<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\Create;

/**
 * @psalm-api
 */
final class AccountCreateResponse
{
    public function __construct(
        public AccountCreateData $data,
    ) {}
}
