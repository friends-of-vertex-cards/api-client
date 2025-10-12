<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use FriendsOfVertexCards\ApiClient\Dto\ConfigureDto;
use FriendsOfVertexCards\ApiClient\Enum\TopUpCurrency;
use FriendsOfVertexCards\ApiClient\TopUp\Init\TopUpInitRequest;
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

$accountIdToTopUp = Uuid::fromString('your-account-id');
$response = $client->initTopUp(
    new TopUpInitRequest(
        $companyId,
        TopUpCurrency::USDTTRC20,
        $accountIdToTopUp,
    ),
);

$paymentAddress = $response->data->paymentAddress;
