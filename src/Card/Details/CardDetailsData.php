<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Details;

/**
 * @psalm-api
 */
final class CardDetailsData
{
    public function __construct(
        public AccountInfo $account,
        public CardDetails $card,
    ) {}
}
