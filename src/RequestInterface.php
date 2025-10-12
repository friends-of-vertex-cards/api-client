<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient;

/**
 * @psalm-api
 */
interface RequestInterface
{
    public function getPath(): string;

    public function getMethod(): string;

    public function getQueryParams(): array;

    public function getBody(): ?string;

    /**
     * @return class-string|null
     */
    public function getResponseClass(): ?string;
}
