<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\List;

use FriendsOfVertexCards\ApiClient\Enum\CardTransactionSortBy;
use FriendsOfVertexCards\ApiClient\Enum\CardTransactionType;
use FriendsOfVertexCards\ApiClient\Enum\SortType;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListCardTransactionRequest implements RequestInterface
{
    private const string DATETIME_FORMAT = 'Y-m-d\TH:i:s.v\Z';

    /**
     * @param UuidInterface[]       $ids
     * @param UuidInterface[]       $accountIds
     * @param UuidInterface[]       $cardIds
     * @param CardTransactionType[] $types
     */
    public function __construct(
        private readonly UuidInterface $companyId,
        public int $page,
        public int $quantity,
        public ?UuidInterface $accountId = null,
        public ?UuidInterface $cardId = null,
        public array $ids = [],
        public array $accountIds = [],
        public array $cardIds = [],
        public array $types = [],
        public ?\DateTimeInterface $createdAtFrom = null,
        public ?\DateTimeInterface $createdAtTo = null,
        public SortType $sortType = SortType::Desc,
        public CardTransactionSortBy $sortBy = CardTransactionSortBy::CreatedAt,
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
        if ($this->accountId !== null) {
            $this->accountIds[] = $this->accountId;
        }
        if ($this->cardId !== null) {
            $this->cardIds[] = $this->cardId;
        }

        return array_filter(
            [
                'page' => $this->page,
                'quantity' => $this->quantity,
                'accountIds' => array_map(static fn (UuidInterface $id) => $id->toString(), $this->accountIds),
                'cardIds' => array_map(static fn (UuidInterface $id) => $id->toString(), $this->cardIds),
                'ids' => array_map(static fn (UuidInterface $id) => $id->toString(), $this->ids),
                'types' => array_map(static fn (CardTransactionType $id) => $id->value, $this->types),
                'createdAtFrom' => $this->createdAtFrom?->format(self::DATETIME_FORMAT),
                'createdAtTo' => $this->createdAtTo?->format(self::DATETIME_FORMAT),
                'sortType' => $this->sortType->value,
                'sortBy' => $this->sortBy->value,
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
