<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Details;

use FriendsOfVertexCards\ApiClient\Enum\LimitType;

/**
 * @psalm-api
 */
final class CardLimit
{
    public function __construct(
        public string $id,
        public LimitType $type,
        public string $value,
        public string $spend,
    ) {}
}
