<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Details;

/**
 * @psalm-api
 */
final class CardDetailsResponse
{
    public function __construct(
        public CardDetailsData $data,
    ) {}
}
