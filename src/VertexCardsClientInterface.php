<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient;

use FriendsOfVertexCards\ApiClient\Account\Disable\DisableAccountByIdRequest;
use FriendsOfVertexCards\ApiClient\Account\Enable\EnableAccountByIdRequest;
use FriendsOfVertexCards\ApiClient\Account\GetAccountById\GetAccountByIdRequest;
use FriendsOfVertexCards\ApiClient\Account\GetAccountById\GetAccountByIdResponse;
use FriendsOfVertexCards\ApiClient\Account\List\GetListAccountRequest;
use FriendsOfVertexCards\ApiClient\Account\List\GetListAccountResponse;
use FriendsOfVertexCards\ApiClient\Account\Update\UpdateAccountRequest;
use FriendsOfVertexCards\ApiClient\Card\Activate\ActivateCardRequest;
use FriendsOfVertexCards\ApiClient\Card\Close\CloseCardRequest;
use FriendsOfVertexCards\ApiClient\Card\Create\CardCreateRequest;
use FriendsOfVertexCards\ApiClient\Card\Create\CardCreateResponse;
use FriendsOfVertexCards\ApiClient\Card\Details\CardDetailsRequest;
use FriendsOfVertexCards\ApiClient\Card\Details\CardDetailsResponse;
use FriendsOfVertexCards\ApiClient\Card\Freeze\FreezeCardRequest;
use FriendsOfVertexCards\ApiClient\Card\GetCredentials\CardCredentialsRequest;
use FriendsOfVertexCards\ApiClient\Card\GetCredentials\CardCredentialsResponse;
use FriendsOfVertexCards\ApiClient\Card\GetRestrictions\CardRestrictionsRequest;
use FriendsOfVertexCards\ApiClient\Card\GetRestrictions\CardRestrictionsResponse;
use FriendsOfVertexCards\ApiClient\Card\List\GetListCardRequest;
use FriendsOfVertexCards\ApiClient\Card\List\GetListCardResponse;
use FriendsOfVertexCards\ApiClient\CardOwner\List\GetListCardOwnerRequest;
use FriendsOfVertexCards\ApiClient\CardOwner\List\GetListCardOwnerResponse;
use FriendsOfVertexCards\ApiClient\CardTransaction\Details\GetCardTransactionDetailsRequest;
use FriendsOfVertexCards\ApiClient\CardTransaction\Details\GetCardTransactionDetailsResponse;
use FriendsOfVertexCards\ApiClient\CardTransaction\List\GetListCardTransactionRequest;
use FriendsOfVertexCards\ApiClient\CardTransaction\List\GetListCardTransactionResponse;
use FriendsOfVertexCards\ApiClient\TopUp\Details\TopUpDetailsRequest;
use FriendsOfVertexCards\ApiClient\TopUp\Details\TopUpDetailsResponse;
use FriendsOfVertexCards\ApiClient\TopUp\Init\TopUpInitRequest;
use FriendsOfVertexCards\ApiClient\TopUp\Init\TopUpInitResponse;
use FriendsOfVertexCards\ApiClient\TopUp\List\GetListTopUpRequest;
use FriendsOfVertexCards\ApiClient\TopUp\List\GetListTopUpResponse;

/**
 * @psalm-api
 */
interface VertexCardsClientInterface
{
    public function getAccount(GetAccountByIdRequest $request): GetAccountByIdResponse;

    public function updateAccount(UpdateAccountRequest $request): void;

    public function enableAccount(EnableAccountByIdRequest $request): void;

    public function disableAccount(DisableAccountByIdRequest $request): void;

    public function getAccounts(GetListAccountRequest $request): GetListAccountResponse;

    public function getCard(CardDetailsRequest $request): CardDetailsResponse;

    public function freezeCard(FreezeCardRequest $request): void;

    public function activateCard(ActivateCardRequest $request): void;

    public function closeCard(CloseCardRequest $request): void;

    public function getCardCredentials(CardCredentialsRequest $request): CardCredentialsResponse;

    public function getCards(GetListCardRequest $request): GetListCardResponse;

    public function getRestrictions(CardRestrictionsRequest $request): CardRestrictionsResponse;

    public function createCard(CardCreateRequest $request): CardCreateResponse;

    public function updateCard(Card\Update\CardUpdateRequest $request): void;

    public function getCardOwners(GetListCardOwnerRequest $request): GetListCardOwnerResponse;

    public function createCardOwner(CardOwner\Create\CreateCardOwnerRequest $request): void;

    public function getTopUps(GetListTopUpRequest $request): GetListTopUpResponse;

    public function getTopUpDetails(TopUpDetailsRequest $request): TopUpDetailsResponse;

    public function initTopUp(TopUpInitRequest $request): TopUpInitResponse;

    public function getCardTransactions(GetListCardTransactionRequest $request): GetListCardTransactionResponse;

    public function getCardTransaction(GetCardTransactionDetailsRequest $request): GetCardTransactionDetailsResponse;
}
