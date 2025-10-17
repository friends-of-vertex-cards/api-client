<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\List;

use FriendsOfVertexCards\ApiClient\Enum\AccountTransactionSortBy;
use FriendsOfVertexCards\ApiClient\Enum\AccountTransactionType;
use FriendsOfVertexCards\ApiClient\Enum\SortType;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListAccountTransactionRequest implements RequestInterface
{
    private const string DATETIME_FORMAT = 'Y-m-d\TH:i:s.v\Z';

    /**
     * @param UuidInterface[]          $ids
     * @param UuidInterface[]          $accountIds
     * @param AccountTransactionType[] $types
     */
    public function __construct(
        private readonly UuidInterface $companyId,
        public int $page,
        public int $quantity,
        public array $ids = [],
        public array $accountIds = [],
        public array $types = [],
        public ?\DateTimeInterface $createdAtFrom = null,
        public ?\DateTimeInterface $createdAtTo = null,
        public SortType $sortType = SortType::Desc,
        public AccountTransactionSortBy $sortBy = AccountTransactionSortBy::CreatedAt,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/transactions', $this->companyId->toString());
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
                'accountIds' => array_map(static fn (UuidInterface $id) => $id->toString(), $this->accountIds),
                'ids' => array_map(static fn (UuidInterface $id) => $id->toString(), $this->ids),
                'types' => array_map(static fn (AccountTransactionType $type) => $type->value, $this->types),
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
        return GetListAccountTransactionResponse::class;
    }
}
