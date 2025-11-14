<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\Create;

use FriendsOfVertexCards\ApiClient\Enum\CardType;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final readonly class CardCreateRequest implements RequestInterface
{
    public function __construct(
        private string $name,
        private UuidInterface $companyId,
        private UuidInterface $accountId,
        private ?UuidInterface $cardProviderBinId,
        private string $cardOwnerId,
        private CardType $cardType,
        private ?CardLimitRequest $limits,
        private ?UuidInterface $binCategoryId,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/cards', $this->companyId->toString(), $this->accountId->toString());
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getBody(): ?string
    {
        $data = [
            'name' => $this->name,
            'cardProviderBinId' => $this->cardProviderBinId?->toString(),
            'binCategoryId' => $this->binCategoryId?->toString(),
            'cardOwnerId' => $this->cardOwnerId,
            'cardType' => $this->cardType->value,
            'limits' => new \stdClass(),
        ];
        if ($this->limits !== null) {
            $data['limits'] = $this->limits->toRequestArray();
        }

        /** @var string $body */
        $body = json_encode($data);

        return $body;
    }

    public function getResponseClass(): string
    {
        return CardCreateResponse::class;
    }
}
