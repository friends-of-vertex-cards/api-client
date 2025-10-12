<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\List;

use FriendsOfVertexCards\ApiClient\Dto\PaginationResponse;

/**
 * @psalm-api
 */
final class GetListAccountResponse
{
    /**
     * @param AccountItemResponse[] $data
     */
    public function __construct(
        public array $data,
        public PaginationResponse $pagination,
    ) {}
}
