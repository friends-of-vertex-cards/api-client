<?php

declare(strict_types=1);

use FriendsOfVertexCards\ApiClient\Dto\ConfigureDto;
use FriendsOfVertexCards\ApiClient\VertexCardsClientFactory;
use Http\Adapter\Guzzle7\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\Serializer;

#[CoversClass(VertexCardsClientFactory::class)]
final class ClientFactoryTest extends TestCase
{
    #[Test]
    public function testCreateClient(): void
    {
        $factory = new VertexCardsClientFactory(
            new Client(),
            new Serializer(),
            'https://gateway.vertex-cards.com',
            '/api/v1/cards',
            $this->createMock(LoggerInterface::class),
        );

        $factory->create(new ConfigureDto('your-api-token'));

        $this->assertTrue(true);
    }
}
