<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetCredentials;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class CardCredentialsRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $accountId,
        public UuidInterface $cardId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/cards/%s/sensitive', $this->companyId->toString(), $this->accountId->toString(), $this->cardId->toString());
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return CardCredentialsResponse::class;
    }
}
