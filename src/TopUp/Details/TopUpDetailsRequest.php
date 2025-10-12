<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\Details;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class TopUpDetailsRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $topUpId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/top-ups/%s', $this->companyId->toString(), $this->topUpId->toString());
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
        return TopUpDetailsResponse::class;
    }
}
