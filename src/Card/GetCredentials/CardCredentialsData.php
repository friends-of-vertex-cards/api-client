<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetCredentials;

/**
 * @psalm-api
 */
final class CardCredentialsData
{
    public function __construct(
        public string $cardNumber,
        public string $cvv,
        public string $expiryMonth,
        public string $expiryYear,
        public ?string $cardHolder,
    ) {}
}
