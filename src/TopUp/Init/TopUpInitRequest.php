<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\TopUp\Init;

use FriendsOfVertexCards\ApiClient\Enum\TopUpCurrency;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final readonly class TopUpInitRequest implements RequestInterface
{
    public function __construct(
        private UuidInterface $companyId,
        private TopUpCurrency $currency,
        private ?UuidInterface $accountId = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/top-ups', $this->companyId->toString());
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
            'currency' => $this->currency->value,
        ];

        if ($this->accountId !== null) {
            $data['accountId'] = $this->accountId->toString();
        }

        /** @var string $body */
        $body = json_encode($data);

        return $body;
    }

    public function getResponseClass(): string
    {
        return TopUpInitResponse::class;
    }
}
