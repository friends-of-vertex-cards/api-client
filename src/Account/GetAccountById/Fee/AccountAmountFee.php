<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById\Fee;

/**
 * @psalm-api
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final readonly class AccountAmountFee
{
    /** @var string FeeType */
    public string $type;

    public function __construct(
        public string $amount,
        public string $currency,
        public bool $inherited,
    ) {}
}
