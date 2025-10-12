<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\List;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListAccountRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public int $page,
        public int $quantity,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts', $this->companyId->toString());
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
        return GetListAccountResponse::class;
    }
}
