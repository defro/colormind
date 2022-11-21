<?php

namespace Defro\ColorMind\Tests;

use Defro\ColorMind\Api;
use Defro\ColorMind\Exception\ColorMindException;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class GetRandomPaletteTest extends TestCase
{
    public function testGetRandomPalette()
    {
        $api = new Api(new Client());
        $result = $api->getRandomPalette('ui');
        $this->assertNotEmpty($result);
    }

    public function testGetRandomPaletteException()
    {
        $client = $this->createMock(Client::class);
        $api = new Api($client);
        $this->expectException(ColorMindException::class);
        $api->getRandomPalette('error');
    }
}
