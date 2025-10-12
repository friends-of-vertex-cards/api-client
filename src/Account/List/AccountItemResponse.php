<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\List;

use FriendsOfVertexCards\ApiClient\Enum\AccountStatus;

/**
 * @psalm-api
 */
final class AccountItemResponse
{
    public function __construct(
        public string $id,
        public string $name,
        public ?string $balance,
        public ?string $holdedBalance,
        public ?string $availableBalance,
        public array $allowedCardTypes,
        public int $cards,
        public string $currency,
        public AccountStatus $status,
        public string $createdAt,
        public string $updatedAt,
        public ?string $deletedAt = null,
    ) {}
}
