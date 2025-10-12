<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\GetAccountById\Fee;

/**
 * @psalm-api
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final readonly class PercentFee
{
    /** @var string FeeType */
    public string $type;

    public function __construct(
        public string $percent,
        public bool $inherited,
    ) {}
}
