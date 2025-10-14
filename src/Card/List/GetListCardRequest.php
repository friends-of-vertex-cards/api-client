<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\List;

use FriendsOfVertexCards\ApiClient\Enum\CardSortBy;
use FriendsOfVertexCards\ApiClient\Enum\CardStatus;
use FriendsOfVertexCards\ApiClient\Enum\SortType;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class GetListCardRequest implements RequestInterface
{
    private const string DATETIME_FORMAT = 'Y-m-d\TH:i:s.v\Z';

    /**
     * @param CardStatus[] $statuses
     */
    public function __construct(
        private readonly UuidInterface $companyId,
        private readonly UuidInterface $accountId,
        public int $page,
        public int $quantity,
        private readonly array $statuses = [],
        private readonly ?\DateTimeImmutable $createdFrom = null,
        private readonly ?\DateTimeImmutable $createdTo = null,
        private readonly ?CardSortBy $sortBy = CardSortBy::CreatedAt,
        private readonly SortType $sortType = SortType::Desc,
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
        return array_filter(
            [
                'page' => $this->page,
                'quantity' => $this->quantity,
                'statuses' => array_column($this->statuses, 'value'),
                'createdAtFrom' => $this->createdFrom?->format(self::DATETIME_FORMAT),
                'createdAtTo' => $this->createdTo?->format(self::DATETIME_FORMAT),
                'sortBy' => $this->sortBy?->value,
                'sortType' => $this->sortType->value,
            ],
        );
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
