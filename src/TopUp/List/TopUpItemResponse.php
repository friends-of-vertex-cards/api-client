<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\List;

use FriendsOfVertexCards\ApiClient\Enum\TopUpStatus;

/**
 * @psalm-api
 */
/**
 * @psalm-api
 */
final class TopUpItemResponse
{
    public function __construct(
        public string $id,
        public TopUpStatus $status,
        public string $currency,
        public string $amount,
        public string $settlementCurrency,
        public string $settlementAmount,
        public string $createdAt,
    ) {}
}
