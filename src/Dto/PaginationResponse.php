<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Dto;

/**
 * @psalm-api
 */
final class PaginationResponse
{
    public function __construct(
        public int $quantity,
        public int $totalQuantity,
        public int $currentPage,
        public int $pages,
    ) {}
}
