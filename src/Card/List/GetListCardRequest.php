<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\List;

use FriendsOfVertexCards\ApiClient\Enum\CardStatus;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListCardRequest implements RequestInterface
{
    /**
     * @param CardStatus[] $statuses
     */
    public function __construct(
        private readonly UuidInterface $companyId,
        private readonly UuidInterface $accountId,
        public int $page,
        public int $quantity,
        private readonly array $statuses = [],
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/cards', $this->companyId->toString(), $this->accountId->toString());
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
            'statuses' => array_column($this->statuses, 'value'),
        ];
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return GetListCardResponse::class;
    }
}
