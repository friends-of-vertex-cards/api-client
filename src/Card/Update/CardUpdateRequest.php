<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Update;

use FriendsOfVertexCards\ApiClient\Card\Create\CardLimitRequest;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final readonly class CardUpdateRequest implements RequestInterface
{
    public function __construct(
        private UuidInterface $companyId,
        private UuidInterface $accountId,
        private UuidInterface $cardId,
        private ?string $name = null,
        private ?CardLimitRequest $limits = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/cards/%s', $this->companyId->toString(), $this->accountId->toString(), $this->cardId->toString());
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
        $data = [];
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->limits !== null) {
            $data['limits'] = $this->limits->toRequestArray();
        }

        /** @var string $body */
        $body = json_encode($data);

        return $body;
    }

    public function getResponseClass(): null
    {
        return null;
    }
}
