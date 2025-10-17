<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountTransaction\List;

use FriendsOfVertexCards\ApiClient\Dto\PaginationResponse;

/**
 * @psalm-api
 */
final class GetListAccountTransactionResponse
{
    /**
     * @param AccountTransactionItemResponse[] $data
     */
    public function __construct(
        public array $data,
        public PaginationResponse $pagination,
    ) {}
}
