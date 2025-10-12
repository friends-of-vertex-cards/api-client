<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Freeze;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class FreezeCardRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $accountId,
        public UuidInterface $cardId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/cards/%s/freeze', $this->companyId->toString(), $this->accountId->toString(), $this->cardId->toString());
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): ?string
    {
        return null;
    }
}
