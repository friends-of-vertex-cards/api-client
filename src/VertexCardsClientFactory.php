<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient;

use FriendsOfVertexCards\ApiClient\Dto\ConfigureDto;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\PluginClient;
use Http\Message\Formatter\CurlCommandFormatter;
use Nyholm\Psr7\Uri;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @psalm-api
 */
final readonly class VertexCardsClientFactory implements VertexCardsClientFactoryInterface
{
    private const string HEADER_API_ACCESS_TOKEN = 'Api-Access-Token';

    public function __construct(
        private ClientInterface $client,
        private SerializerInterface $serializer,
        private string $apiHost,
        private string $apiPath,
        private LoggerInterface $logger,
    ) {}

    public function create(ConfigureDto $configureDto): VertexCardsClientInterface
    {
        return new VertexCardsClient(
            new PluginClient(
                $this->client,
                [
                    new AddHostPlugin(new Uri($this->apiHost)),
                    new AddPathPlugin(new Uri($this->apiPath)),
                    new HeaderDefaultsPlugin([
                        self::HEADER_API_ACCESS_TOKEN => $configureDto->token,
                        'Content-Type' => 'application/json',
                    ]),
                    new LoggerPlugin($this->logger, new CurlCommandFormatter()),
                    new ErrorPlugin(),
                ],
            ),
            $this->serializer,
            $this->logger,
        );
    }
}
