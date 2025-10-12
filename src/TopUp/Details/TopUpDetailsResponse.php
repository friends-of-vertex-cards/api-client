<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\Details;

/**
 * @psalm-api
 */
final class TopUpDetailsResponse
{
    public function __construct(
        public TopUpDetailsData $data,
    ) {}
}
