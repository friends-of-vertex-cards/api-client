<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Dto;

/**
 * @psalm-api
 */
final readonly class ConfigureDto
{
    public function __construct(
        public string $token,
    ) {}
}
