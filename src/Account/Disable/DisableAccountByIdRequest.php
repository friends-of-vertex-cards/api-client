<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\Disable;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class DisableAccountByIdRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $accountId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/disable', $this->companyId->toString(), $this->accountId->toString());
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
