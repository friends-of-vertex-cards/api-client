<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\GetRestrictions;

use FriendsOfVertexCards\ApiClient\Enum\LimitType;

/**
 * @psalm-api
 */
final class CardLimit
{
    public function __construct(
        public LimitType $type,
        public ?string $amountMin,
        public ?string $amountMax,
    ) {}
}
