<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\List;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListCardTransactionRequest implements RequestInterface
{
    public function __construct(
        private readonly UuidInterface $companyId,
        public int $page,
        public int $quantity,
        public ?UuidInterface $accountId = null,
        public ?UuidInterface $cardId = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/cards/transactions', $this->companyId->toString());
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getQueryParams(): array
    {
        return array_filter(
            [
                'page' => $this->page,
                'quantity' => $this->quantity,
                'accountId' => $this->accountId?->toString(),
                'cardId' => $this->cardId?->toString(),
            ],
        );
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return GetListCardTransactionResponse::class;
    }
}
