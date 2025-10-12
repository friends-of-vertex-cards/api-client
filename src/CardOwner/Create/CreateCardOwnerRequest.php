<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardOwner\Create;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class CreateCardOwnerRequest implements RequestInterface
{
    public function __construct(
        private readonly UuidInterface $companyId,
        public string $cardOwnerId,
        public string $firstName,
        public string $lastName,
        public string $email,
        public ?string $phone = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/card-owners', $this->companyId->toString());
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
        /** @var string $body */
        $body = json_encode(
            [
                'cardOwnerId' => $this->cardOwnerId,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'phone' => $this->phone,
            ],
        );

        return $body;
    }

    public function getResponseClass(): ?string
    {
        return null;
    }
}
