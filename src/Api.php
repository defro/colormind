<?php

namespace Defro\ColorMind;

use Defro\ColorMind\Exception\ColorMindException;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Api
{
    /** @var string */
    private string $endpointUri = 'http://colormind.io';

    /**
     * @param Client $client
     */
    public function __construct(private Client $client)
    {
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return string
     */
    public function getModels(): string
    {
        $uri = $this->endpointUri.'/list';

        $response = $this->client->get($uri);

        if ($response->getStatusCode() !== 200) {
            throw new ColorMindException(
                sprintf('Bad status code : could not connect to %s', $uri),
                $response->getStatusCode() ?? 0
            );
        }

        return $response->getBody()->getContents();
    }

    /**
     * @param string $modelName
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return string
     */
    public function getRandomPalette(string $modelName = 'default'): string
    {
        $uri = $this->endpointUri.'/api';

        $response = $this->client->post($uri, [RequestOptions::JSON => ['model' => $modelName]]);

        if ($response->getStatusCode() !== 200) {
            throw new ColorMindException(
                sprintf('Bad status code : could not connect to %s', $uri),
                $response->getStatusCode() ?? 0
            );
        }

        return $response->getBody()->getContents();
    }

    /**
     * @param array  $input
     * @param string $modelName
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return string
     */
    public function getColorSuggestions(array $input, string $modelName = 'default'): string
    {
        $input = json_encode($input, 0, 2);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new ColorMindException(
                sprintf('Input is not a valid JSON: %s', json_last_error_msg())
            );
        }

        $options = [
            RequestOptions::JSON => [
                'input' => $input,
                'model' => $modelName,
            ],
        ];

        $uri = $this->endpointUri.'/api';

        $response = $this->client->post($uri, $options);

        if ($response->getStatusCode() !== 200) {
            throw new ColorMindException(
                sprintf('Bad status code : could not connect to %s', $uri),
                $response->getStatusCode() ?? 0
            );
        }

        return $response->getBody()->getContents();
    }
}
