<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\CardOwner\Update;

use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final class UpdateCardOwnerRequest implements RequestInterface
{
    public function __construct(
        private readonly UuidInterface $companyId,
        public string $cardOwnerId,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $email = null,
        public ?string $phone = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/card-owners/%s', $this->companyId->toString(), $this->cardOwnerId);
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
                    'firstName' => $this->firstName,
                    'lastName' => $this->lastName,
                    'email' => $this->email,
                    'phone' => $this->phone,
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
