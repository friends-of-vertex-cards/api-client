<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById;

use FriendsOfVertexCards\ApiClient\Enum\AccountStatus;
use FriendsOfVertexCards\ApiClient\Enum\CardType;

/**
 * @psalm-api
 */
final class AccountDetailsResponse
{
    /**
     * @param CardBinResponse[] $binList
     * @param CardType[]        $allowedCardTypes
     */
    public function __construct(
        public string $id,
        public string $name,
        public ?string $balance,
        public ?string $holdedBalance,
        public ?string $availableBalance,
        public bool $isUsedCardBalance,
        public array $allowedCardTypes,
        public int $cards,
        public string $currency,
        public AccountStatus $status,
        public string $createdAt,
        public string $updatedAt,
        public FeeListResponse $fees,
        public ?string $deletedAt = null,
        public array $binList = [],
    ) {}
}
