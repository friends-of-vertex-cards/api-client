<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardOwner\List;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListCardOwnerRequest implements RequestInterface
{
    public function __construct(
        private readonly UuidInterface $companyId,
        public int $page,
        public int $quantity,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/card-owners', $this->companyId->toString());
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getQueryParams(): array
    {
        return [
            'page' => $this->page,
            'quantity' => $this->quantity,
        ];
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return GetListCardOwnerResponse::class;
    }
}
