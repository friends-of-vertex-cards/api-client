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
    private const string DATE_FORMAT = 'Y-m-d H:i:s';

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
        private readonly ?CardSortBy $sortBy = null,
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
                'createdFrom' => $this->createdFrom?->format(self::DATE_FORMAT),
                'createdTo' => $this->createdTo?->format(self::DATE_FORMAT),
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
