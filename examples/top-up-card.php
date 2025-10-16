<?php

use FriendsOfVertexCards\ApiClient\Account\GetAccountById\GetAccountByIdRequest;
use FriendsOfVertexCards\ApiClient\Card\TopUpBalance\TopUpCardRequest;
use FriendsOfVertexCards\ApiClient\Dto\ConfigureDto;
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
$accountId = Uuid::fromString('your-account-id');
$cardId = Uuid::fromString('your-card-id');
$amount = '1';

$factory = new VertexCardsClientFactory(
    new Client(),
    $serializer,
    'https://gateway.vertex-cards.com',
    '/api/v1/cards',
    new NullLogger(),
);

$client = $factory->create(new ConfigureDto($apiKey));

$account = $client->getAccount(
    new GetAccountByIdRequest(
        $companyId,
        $accountId,
    ),
);

if (!$account->data->isUsedCardBalance) {
    throw new RuntimeException('Card balance is not used. All cards use account balance');
}

if (bccomp($account->data->balance, $amount, 2) === -1) {
    throw new RuntimeException('Insufficient balance');
}

$response = $client->topUpCardBalance(
    new TopUpCardRequest(
        $companyId,
        $accountId,
        $cardId,
        $amount,
    ),
);
