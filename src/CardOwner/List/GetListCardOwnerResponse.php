<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardOwner\List;

use FriendsOfVertexCards\ApiClient\Card\Details\CardOwner;
use FriendsOfVertexCards\ApiClient\Dto\PaginationResponse;

/**
 * @psalm-api
 */
final class GetListCardOwnerResponse
{
    /**
     * @param CardOwner[] $data
     */
    public function __construct(
        public array $data,
        public PaginationResponse $pagination,
    ) {}
}
