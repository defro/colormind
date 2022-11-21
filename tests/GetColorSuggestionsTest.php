<?php

namespace Defro\ColorMind\Tests;

use Defro\ColorMind\Api;
use Defro\ColorMind\Exception\ColorMindException;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class GetColorSuggestionsTest extends TestCase
{
    public function testColorSuggestions()
    {
        $api = new Api(new Client());
        $result = $api->getColorSuggestions([[44, 43, 44], [90, 83, 82], 'N', 'N', 'N']);
        $this->assertNotEmpty($result);
    }

    public function testColorSuggestionsJsonError()
    {
        $api = new Api(new Client());
        $this->expectException(ColorMindException::class);
        $api->getColorSuggestions([[[['depth']]]], 'error');
    }

    public function testGetColorSuggestionsException()
    {
        $client = $this->createMock(Client::class);
        $api = new Api($client);
        $this->expectException(ColorMindException::class);
        $api->getColorSuggestions([], 'error');
    }
}
