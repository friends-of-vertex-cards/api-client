<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetCredentials;

/**
 * @psalm-api
 */
final class CardCredentialsResponse
{
    public function __construct(
        public CardCredentialsData $data,
    ) {}
}
