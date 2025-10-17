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
use FriendsOfVertexCards\ApiClient\AccountTransaction\Details\GetAccountTransactionDetailsRequest;
use FriendsOfVertexCards\ApiClient\AccountTransaction\Details\GetAccountTransactionDetailsResponse;
use FriendsOfVertexCards\ApiClient\AccountTransaction\List\GetListAccountTransactionRequest;
use FriendsOfVertexCards\ApiClient\AccountTransaction\List\GetListAccountTransactionResponse;
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
use FriendsOfVertexCards\ApiClient\Card\TopUpBalance\TopUpCardRequest;
use FriendsOfVertexCards\ApiClient\Card\TopUpBalance\TopUpCardResponse;
use FriendsOfVertexCards\ApiClient\Card\WithdrawBalance\WithdrawCardRequest;
use FriendsOfVertexCards\ApiClient\Card\WithdrawBalance\WithdrawCardResponse;
use FriendsOfVertexCards\ApiClient\CardOwner\List\GetListCardOwnerRequest;
use FriendsOfVertexCards\ApiClient\CardOwner\List\GetListCardOwnerResponse;
use FriendsOfVertexCards\ApiClient\CardTransaction\Details\GetCardTransactionDetailsRequest;
use FriendsOfVertexCards\ApiClient\CardTransaction\Details\GetCardTransactionDetailsResponse;
use FriendsOfVertexCards\ApiClient\CardTransaction\List\GetListCardTransactionRequest;
use FriendsOfVertexCards\ApiClient\CardTransaction\List\GetListCardTransactionResponse;
use FriendsOfVertexCards\ApiClient\RequestInterface as CardsRequestInterface;
use FriendsOfVertexCards\ApiClient\TopUp\Details\TopUpDetailsRequest;
use FriendsOfVertexCards\ApiClient\TopUp\Details\TopUpDetailsResponse;
use FriendsOfVertexCards\ApiClient\TopUp\Init\TopUpInitRequest;
use FriendsOfVertexCards\ApiClient\TopUp\Init\TopUpInitResponse;
use FriendsOfVertexCards\ApiClient\TopUp\List\GetListTopUpRequest;
use FriendsOfVertexCards\ApiClient\TopUp\List\GetListTopUpResponse;
use Http\Client\Common\Exception\ClientErrorException;
use Nyholm\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @psalm-suppress MixedReturnStatement
 */
final readonly class VertexCardsClient implements VertexCardsClientInterface
{
    public function __construct(
        private ClientInterface $client,
        private SerializerInterface $serializer,
        private LoggerInterface $logger,
    ) {}

    /**
     * @throws ClientExceptionInterface|ExceptionInterface
     */
    public function getAccount(GetAccountByIdRequest $request): GetAccountByIdResponse
    {
        return $this->sendRequest($request);
    }

    /**
     * @throws ClientExceptionInterface|ExceptionInterface
     */
    public function getAccounts(GetListAccountRequest $request): GetListAccountResponse
    {
        return $this->sendRequest($request);
    }

    public function enableAccount(EnableAccountByIdRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function disableAccount(DisableAccountByIdRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function getTopUps(GetListTopUpRequest $request): GetListTopUpResponse
    {
        return $this->sendRequest($request);
    }

    public function getTopUpDetails(TopUpDetailsRequest $request): TopUpDetailsResponse
    {
        return $this->sendRequest($request);
    }

    public function initTopUp(TopUpInitRequest $request): TopUpInitResponse
    {
        return $this->sendRequest($request);
    }

    public function getCards(GetListCardRequest $request): GetListCardResponse
    {
        return $this->sendRequest($request);
    }

    public function getCard(CardDetailsRequest $request): CardDetailsResponse
    {
        return $this->sendRequest($request);
    }

    public function getRestrictions(CardRestrictionsRequest $request): CardRestrictionsResponse
    {
        return $this->sendRequest($request);
    }

    public function updateAccount(UpdateAccountRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function getCardOwners(GetListCardOwnerRequest $request): GetListCardOwnerResponse
    {
        return $this->sendRequest($request);
    }

    public function createCard(CardCreateRequest $request): CardCreateResponse
    {
        return $this->sendRequest($request);
    }

    public function topUpCardBalance(TopUpCardRequest $request): TopUpCardResponse
    {
        return $this->sendRequest($request);
    }

    public function withdrawCardBalance(WithdrawCardRequest $request): WithdrawCardResponse
    {
        return $this->sendRequest($request);
    }

    public function getCardTransactions(GetListCardTransactionRequest $request): GetListCardTransactionResponse
    {
        return $this->sendRequest($request);
    }

    public function getCardTransaction(GetCardTransactionDetailsRequest $request): GetCardTransactionDetailsResponse
    {
        return $this->sendRequest($request);
    }

    public function getAccountTransactions(GetListAccountTransactionRequest $request): GetListAccountTransactionResponse
    {
        return $this->sendRequest($request);
    }

    public function getAccountTransaction(GetAccountTransactionDetailsRequest $request): GetAccountTransactionDetailsResponse
    {
        return $this->sendRequest($request);
    }

    public function getCardCredentials(CardCredentialsRequest $request): CardCredentialsResponse
    {
        return $this->sendRequest($request);
    }

    public function freezeCard(FreezeCardRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function activateCard(ActivateCardRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function closeCard(CloseCardRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function createCardOwner(CardOwner\Create\CreateCardOwnerRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function updateCardOwner(CardOwner\Update\UpdateCardOwnerRequest $request): void
    {
        $this->sendRequest($request);
    }

    public function updateCard(Card\Update\CardUpdateRequest $request): void
    {
        $this->sendRequest($request);
    }

    /**
     * @throws ClientExceptionInterface
     * @throws ExceptionInterface
     */
    private function sendRequest(CardsRequestInterface $request): mixed
    {
        $preparedRequest = $this->prepareRequest($request);

        try {
            $response = $this->client->sendRequest($preparedRequest);
            $body = (string) $response->getBody();
            $this->logger->info(\sprintf('Response received: %s. Http code: %s', $body, $response->getStatusCode()));

            $responseClass = $request->getResponseClass();
            if ($responseClass === null) {
                return null;
            }

            return $this->serializer->deserialize($body, $responseClass, 'json');
        } catch (\Exception $exception) {
            if ($exception instanceof ClientErrorException) {
                $this->logger->info(
                    \sprintf(
                        'Response received: %s. Http code: %s',
                        $exception->getResponse()->getBody(),
                        $exception->getResponse()->getStatusCode(),
                    ),
                );
            }

            throw $exception;
        }
    }

    private function prepareRequest(CardsRequestInterface $request): RequestInterface
    {
        return new Request(
            $request->getMethod(),
            $request->getPath() . '?' . http_build_query($request->getQueryParams()),
            body: $request->getBody(),
        );
    }
}
