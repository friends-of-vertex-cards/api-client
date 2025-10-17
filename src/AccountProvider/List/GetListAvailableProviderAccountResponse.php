<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\AccountProvider\List;

/**
 * @psalm-api
 */
final class GetListAvailableProviderAccountResponse
{
    /**
     * @param AvailableProviderAccountItemResponse[] $data
     */
    public function __construct(
        public array $data,
    ) {}
}
