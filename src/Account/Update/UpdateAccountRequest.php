<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\Update;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */ class UpdateAccountRequest implements RequestInterface
{
    public function __construct(
        public UuidInterface $companyId,
        public UuidInterface $accountId,
        public string $name,
        public ?AccountFeeRequest $fees = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s', $this->companyId->toString(), $this->accountId->toString());
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getBody(): ?string
    {
        /** @var string $body */
        $body = json_encode(
            array_filter(
                [
                    'name' => $this->name,
                    'fees' => $this->fees?->toRequestArray(),
                ],
            ),
        );

        return $body;
    }

    public function getResponseClass(): ?string
    {
        return null;
    }
}
