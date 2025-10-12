<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\Details;

use FriendsOfVertexCards\ApiClient\Enum\TopUpStatus;

/**
 * @psalm-api
 */
final class TopUpDetailsData
{
    public function __construct(
        public string $id,
        public ?string $paymentAddress,
        public TopUpStatus $status,
        public string $currency,
        public string $amount,
        public ?string $feeCurrency,
        public ?string $feeAmount,
        public string $settlementCurrency,
        public string $settlementAmount,
        public ?string $txHash,
        public string $createdAt,
    ) {}
}
