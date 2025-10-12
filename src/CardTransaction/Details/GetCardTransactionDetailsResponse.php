<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\Details;

/**
 * @psalm-api
 */
final class GetCardTransactionDetailsResponse
{
    public function __construct(
        public CardTransactionData $data,
    ) {}
}
