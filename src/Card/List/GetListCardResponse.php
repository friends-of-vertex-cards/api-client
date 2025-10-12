<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\List;

use FriendsOfVertexCards\ApiClient\Dto\PaginationResponse;

/**
 * @psalm-api
 */
final class GetListCardResponse
{
    /**
     * @param CardItemResponse[] $data
     */
    public function __construct(
        public array $data,
        public PaginationResponse $pagination,
    ) {}
}
