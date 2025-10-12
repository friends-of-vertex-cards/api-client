<?php

use FriendsOfVertexCards\ApiClient\Card\GetCredentials\CardCredentialsRequest;
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

$factory = new VertexCardsClientFactory(
    new Client(),
    $serializer,
    'https://gateway.vertex-cards.com',
    '/api/v1/cards',
    new NullLogger(),
);

$client = $factory->create(new ConfigureDto($apiKey));

$accountId = Uuid::fromString('your-account-id');
$cardId = Uuid::fromString('your-card-id');

$creds = $client->getCardCredentials(
    new CardCredentialsRequest(
        $companyId,
        $accountId,
        $cardId,
    ),
);
