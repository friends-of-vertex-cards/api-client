<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Create;

/**
 * @psalm-api
 */
final readonly class CardLimitRequest
{
    public function __construct(
        public ?string $dailyLimit = null,
        public ?string $weeklyLimit = null,
        public ?string $monthlyLimit = null,
        public ?string $yearLimit = null,
        public ?string $lifetimeLimit = null,
        public ?string $transactionLimit = null,
    ) {}

    public function toRequestArray(): array
    {
        return array_filter([
            'daily_limit' => $this->dailyLimit,
            'weekly_limit' => $this->weeklyLimit,
            'monthly_limit' => $this->monthlyLimit,
            'year_limit' => $this->yearLimit,
            'lifetime_limit' => $this->lifetimeLimit,
            'transaction_limit' => $this->transactionLimit,
        ]);
    }
}
