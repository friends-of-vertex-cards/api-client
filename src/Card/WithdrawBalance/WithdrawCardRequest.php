<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Card\WithdrawBalance;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final readonly class WithdrawCardRequest implements RequestInterface
{
    public function __construct(
        private UuidInterface $companyId,
        private UuidInterface $accountId,
        private UuidInterface $cardId,
        private string $amount,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts/%s/cards/%s/balance/withdraw', $this->companyId->toString(), $this->accountId->toString(), $this->cardId->toString());
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
            [
                'amount' => $this->amount,
            ],
        );

        return $body;
    }

    public function getResponseClass(): string
    {
        return WithdrawCardResponse::class;
    }
}
