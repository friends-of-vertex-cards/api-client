<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetRestrictions;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class CardRestrictionsRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $accountId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/restrictions', $this->companyId->toString(), $this->accountId->toString());
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
        return CardRestrictionsResponse::class;
    }
}
