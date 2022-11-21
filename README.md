# ColorMind API

[![Latest Version](https://img.shields.io/github/release/defro/colormind.svg?style=flat-square)](https://github.com/defro/colormind/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/defro/colormind/master.svg?style=flat-square)](https://travis-ci.org/defro/colormind)
[![SymfonyInsight](https://insight.symfony.com/projects/b40bde7d-6eaf-410b-b5a7-e5703f4e3b0c/mini.svg)](https://insight.symfony.com/projects/bb6b7848-7e7a-4e9f-a25b-397369caeef5)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/defro/colormind/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/defro/colormind/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/defro/colormind/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/defro/colormind/?branch=master)
[![StyleCI](https://styleci.io/repos/568586765/shield)](https://styleci.io/repos/156726302)
[![Total Downloads](https://img.shields.io/packagist/dt/defro/colormind.svg?style=flat-square)](https://packagist.org/packages/defro/colormind)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MSER6KJHQM9NS)

This package can get quotes and their authors using [Colorming API](http://colormind.io/api-access/).

Here's a quick example:

```php
$client = new \GuzzleHttp\Client();
$colorMind = new \Defro\ColorMind\Api($client);
$randomPalette = $colorMind
    ->getRandomPalette();

var_dump($randomPalette);
```

## Documentation

Read how to install, use this package, customize it on [documentation page](https://defro.github.io/colormind/).

## License

The MIT License (MIT). Please see [license file](LICENSE) for more information.
