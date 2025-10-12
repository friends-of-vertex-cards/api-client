<?php

use FriendsOfVertexCards\ApiClient\Account\GetAccountById\GetAccountByIdRequest;
use FriendsOfVertexCards\ApiClient\Card\Create\CardCreateRequest;
use FriendsOfVertexCards\ApiClient\Card\GetRestrictions\CardRestrictionsRequest;
use FriendsOfVertexCards\ApiClient\CardOwner\Create\CreateCardOwnerRequest;
use FriendsOfVertexCards\ApiClient\Dto\ConfigureDto;
use FriendsOfVertexCards\ApiClient\Enum\CardType;
use FriendsOfVertexCards\ApiClient\VertexCardsClientFactory;
use Http\Adapter\Guzzle7\Client;
use Psr\Log\NullLogger;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

$serializer = new Serializer(
    [
        new ObjectNormalizer(),
    ],
    [
        new JsonEncoder(),
    ],
);

$apiKey = 'your-api-key';
$companyId = Uuid::fromString('your-company-id');

$factory = new VertexCardsClientFactory(
    new Client(),
    $serializer,
    'https://gateway.vertex-cards.com',
    '/api/v1/cards',
    new NullLogger(),
);

$client = $factory->create(new ConfigureDto($apiKey));

$accountId = Uuid::fromString('your-account-id');

$restrictions = $client->getRestrictions(
    new CardRestrictionsRequest(
        $companyId,
        $accountId,
    ),
);
$bin = $restrictions->data->binList[0] ?? null;
if ($bin === null) {
    throw new RuntimeException('No available bins for account');
}

$yourInternalCardOwnerId = 'your-internal-card-owner-id';
$client->createCardOwner(
    new CreateCardOwnerRequest(
        $companyId,
        $yourInternalCardOwnerId,
        'John',
        'Doe',
        'johndoe@gmail.com',
    ),
);

$accountResponse = $client->getAccount(new GetAccountByIdRequest($companyId, $accountId));
if (!in_array(CardType::Virtual, $accountResponse->data->allowedCardTypes, true)) {
    throw new RuntimeException('No virtual cards available for account!');
}

$response = $client->createCard(
    new CardCreateRequest(
        'My first card',
        $companyId,
        $accountId,
        Uuid::fromString($bin->cardProviderBinId),
        $yourInternalCardOwnerId,
        CardType::Virtual,
        null,
    ),
);
