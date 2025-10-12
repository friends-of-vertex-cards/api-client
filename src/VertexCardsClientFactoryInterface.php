<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient;

use FriendsOfVertexCards\ApiClient\Dto\ConfigureDto;

/**
 * @psalm-api
 */
interface VertexCardsClientFactoryInterface
{
    public function create(ConfigureDto $configureDto): VertexCardsClientInterface;
}
