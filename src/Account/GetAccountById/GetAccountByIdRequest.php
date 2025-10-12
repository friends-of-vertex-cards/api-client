<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetAccountByIdRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $accountId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s', $this->companyId->toString(), $this->accountId->toString());
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
        return GetAccountByIdResponse::class;
    }
}
