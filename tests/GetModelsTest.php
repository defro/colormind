<?php

namespace Defro\ColorMind\Tests;

use Defro\ColorMind\Api;
use Defro\ColorMind\Exception\ColorMindException;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class GetModelsTest extends TestCase
{
    public function testGetModels()
    {
        $api = new Api(new Client());
        $result = $api->getModels();
        $this->assertNotEmpty($result);
    }

    public function testGetModelsException()
    {
        $client = $this->createMock(Client::class);
        $api = new Api($client);
        $this->expectException(ColorMindException::class);
        $api->getModels();
    }
}
