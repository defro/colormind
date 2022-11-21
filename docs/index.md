---
layout: default
---

This library writing in PHP make request easier to make API request to ColorMind API.

# Installation

Use Composer to install this package as a requirement like this :
```bash
composer require defro/colormind
```

# Usage

## Initialization
```php
$client = new \GuzzleHttp\Client();
$api = new \Defro\Google\ColorMind\Api($client);
```

## Get random palette
```php
$palette = $api->getRandomPalette();
```

## Get color suggestions
```php
$imgUrl = $api->getColorSuggestions([[44, 43, 44], [90, 83, 82], 'N', 'N', 'N']);
```

## Get models
```php
$imgUrl = $api->getModels();
```

# Run it locally in a Docker container

You can run example script and unit tests in included Docker container, [read how to do it](./docker.md).
