<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\Update;

/**
 * @psalm-api
 */
final readonly class AccountFeeRequest
{
    private const string TYPE_AMOUNT = 'amount';
    private const string TYPE_PERCENT = 'percent';

    public function __construct(
        public ?string $cardTransactionsAmount = null,
        public ?string $cardIssuingAmount = null,
        public ?string $topUpsAllocationPercent = null,
    ) {}

    public function toRequestArray(): array
    {
        return [
            'cardTransactions' => [
                'type' => self::TYPE_AMOUNT,
                'value' => $this->cardTransactionsAmount ?? '0',
            ],
            'cardIssuing' => [
                'type' => self::TYPE_AMOUNT,
                'value' => $this->cardIssuingAmount ?? '0',
            ],
            'topUpsAllocation' => [
                'type' => self::TYPE_PERCENT,
                'value' => $this->topUpsAllocationPercent ?? '0',
            ],
        ];
    }
}
