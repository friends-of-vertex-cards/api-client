<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Account\Create;

use FriendsOfVertexCards\ApiClient\Account\Update\AccountFeeRequest;
use FriendsOfVertexCards\ApiClient\Card\Create\CardCreateResponse;
use FriendsOfVertexCards\ApiClient\RequestInterface;
use Ramsey\Uuid\UuidInterface;

/**
 * @psalm-api
 */
final readonly class AccountCreateRequest implements RequestInterface
{
    /** Each card has its own dedicated balance, separate from the main account balance */
    private const string PERSONAL_CARD_BALANCE = 'personal_card_balance';

    /** All cards share the main account balance; no individual card balances are maintained */
    private const string SHARED_ACCOUNT_BALANCE = 'shared_account_balance';

    public function __construct(
        private UuidInterface $companyId,
        private UuidInterface $id,
        private string $name,
        public bool $cardBalance,
        private ?AccountFeeRequest $fees = null,
    ) {}

    public function getPath(): string
    {
        return \sprintf('/companies/%s/accounts', $this->companyId->toString());
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
            'id' => $this->id->toString(),
            'name' => $this->name,
            'enableCardBalance' => $this->cardBalance ? self::PERSONAL_CARD_BALANCE : self::SHARED_ACCOUNT_BALANCE,
        ];
        if ($this->fees !== null) {
            $data['fees'] = $this->fees->toRequestArray();
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
