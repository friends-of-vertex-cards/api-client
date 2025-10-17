<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\Details;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final readonly class GetAccountTransactionDetailsRequest implements RequestInterface
{
    public function __construct(
        private UuidInterface $companyId,
        private UuidInterface $id,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/transactions/%s', $this->companyId->toString(), $this->id->toString());
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
        return GetAccountTransactionDetailsResponse::class;
    }
}
