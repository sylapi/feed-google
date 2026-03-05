# Google Merchant

[![PHPStan](https://img.shields.io/badge/PHPStan-passing-brightgreen?logo=php)](https://phpstan.org/)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.0-blue?logo=php)](https://www.php.net/supported-versions.php)
[![License](https://img.shields.io/badge/License-MIT-green)](LICENSE)

Library for generating product feeds for Google Merchant Center.

## Installation

```bash
composer require sylapi/feed-google
```

## Requirements
- PHP >= 8.0
- sylapi/feeds ^1.0.0

## Quick Start

```php
$feedGenerator = new Sylapi\Feeds\FeedGenerator();
$feedGenerator->setFeed(new Sylapi\Feeds\Google\Feed(
    Sylapi\Feeds\Parameters::create([
        'title' => 'Title example',
        'description' => 'Description example...',
        'link' => 'https://link.example/',
    ])
));

$product = new \Sylapi\Feeds\Models\Product();
// Add product data
$feedGenerator->appendProduct($product);
//...
$feedGenerator->save();
echo $feedGenerator->filePath();
```

## Testing & Analysis

Run tests:
```bash
composer tests
```

Static analysis:
```bash
composer phpstan
```

Code coverage:
```bash
composer coverage-html
```

## Commands

| COMMAND | DESCRIPTION |
| ------ | ------ |
| composer tests | Tests |
| composer phpstan | PHPStan |
| composer coverage | PHPUnit Coverage |
| composer coverage-html | PHPUnit Coverage HTML (DIR: ./coverage/) |