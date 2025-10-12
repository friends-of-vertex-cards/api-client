<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById;

/**
 * @psalm-api
 */
final class GetAccountByIdResponse
{
    public function __construct(
        public AccountDetailsResponse $data,
    ) {}
}
