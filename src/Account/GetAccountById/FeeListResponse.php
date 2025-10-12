<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById;

use FriendsOfVertexCards\ApiClient\Account\GetAccountById\Fee\AccountAmountFee;
use FriendsOfVertexCards\ApiClient\Account\GetAccountById\Fee\PercentFee;

/**
 * @psalm-api
 */
final readonly class FeeListResponse
{
    public function __construct(
        public AccountAmountFee|PercentFee|null $cardTransactions = null,
        public ?AccountAmountFee $cardIssuing = null,
        public AccountAmountFee|PercentFee|null $topUpsAllocation = null,
    ) {}
}
