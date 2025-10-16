# Vertex Cards API Client

PHP library for Vertex Cards API interaction

## Supported PHP Versions

* PHP 8.3+

## Documentation

### 1. Installation

The Vertex Cards API Client can be installed using Composer by running the following command:

```sh
composer require friends-of-vertex-cards/api-client
```

### 2. Getting API token
The library provides authorization flows for users based on a custom header.

Proceed to [documentation](https://developers.vertex-cards.com/docs/common/getting-started) to obtain your Live API Key and Company Uuid.

### 3. Client Initialization

Create ApiClient object using the following code:

```php
$apiKey = 'your-api-key'; // step 2. Getting API token
$factory = new \FriendsOfVertexCards\ApiClient\VertexCardsClientFactory(
            new \Http\Adapter\Guzzle7\Client(),
            new \Symfony\Component\Serializer\Serializer(),
            'https://gateway.vertex-cards.com',
            '/api/v1/cards',
            new \Psr\Log\NullLogger(),
);

$client = $factory->create(new ConfigureDto($apiKey));
```

Also you can implement your own factory by implementing `\FriendsOfVertexCards\ApiClient\VertexCardsClientFactoryInterface`


## 4. API Requests
You can find the full list of API methods [here](https://developers.vertex-cards.com/docs/api-reference).

### 4.1 Request Sample

Example of getting accounts:

```php
$companyUuid = Ramsey\Uuid\Uuid::fromString('your-company-uuid') // step 2. Getting API token
$apiKey = 'your-api-key'; // step 2. Getting API token
/** @var \FriendsOfVertexCards\ApiClient\VertexCardsClientInterface $client */
$client = $factory->create(new ConfigureDto($apiKey)); // step 3. Client Initialization

/** @var \FriendsOfVertexCards\ApiClient\Account\List\GetListAccountResponse $accounts */
$accounts = $client->getAccounts(new \FriendsOfVertexCards\ApiClient\Account\List\GetListAccountRequest($companyUuid, 1, 10));
```

## 5. Use cases

- [Init top up](examples/topup-account.php)
- [Create card](examples/create-card.php)
- [Get card credentials](examples/get-card-credentials.php)
- [Top up card balance](examples/top-up-card.php)
- [Withdraw card balance](examples/withdraw-card-balance.php)
