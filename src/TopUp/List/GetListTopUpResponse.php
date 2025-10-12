<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\List;

use FriendsOfVertexCards\ApiClient\Dto\PaginationResponse;

/**
 * @psalm-api
 */
/**
 * @psalm-api
 */
final class GetListTopUpResponse
{
    /**
     * @param TopUpItemResponse[] $data
     */
    public function __construct(
        public array $data,
        public PaginationResponse $pagination,
    ) {}
}
