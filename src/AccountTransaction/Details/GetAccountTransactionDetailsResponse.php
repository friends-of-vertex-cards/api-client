<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\Details;

/**
 * @psalm-api
 */
final class GetAccountTransactionDetailsResponse
{
    public function __construct(
        public AccountTransactionData $data,
    ) {}
}
