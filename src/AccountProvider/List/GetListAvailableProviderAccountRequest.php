<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountProvider\List;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListAvailableProviderAccountRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/providers', $this->companyId->toString());
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
        return GetListAvailableProviderAccountResponse::class;
    }
}
