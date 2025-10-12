<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardTransaction\List;

use FriendsOfVertexCards\ApiClient\Dto\PaginationResponse;

/**
 * @psalm-api
 */
final class GetListCardTransactionResponse
{
    /**
     * @param CardTransactionItemResponse[] $data
     */
    public function __construct(
        public array $data,
        public PaginationResponse $pagination,
    ) {}
}
