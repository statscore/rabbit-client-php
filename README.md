# ![sportsapi](https://statscore-s3-cdn.statscore.com/v2/products/sportsAPI/spa-logo.png) STATSCORE Official Rabbit Client PHP

[![Build Status](https://travis-ci.org/statscore/rabbit-client-php.svg?branch=master)](https://travis-ci.org/statscore/rabbit-client-php)
[![Packagist](https://img.shields.io/packagist/v/statscore/rabbit-client-php.svg)](https://packagist.org/packages/statscore/rabbit-client-php)
[![PHP from Travis config](https://img.shields.io/travis/php-v/statscore/rabbit-client-php/master.svg)](https://travis-ci.org/statscore/rabbit-client-php)
[![Libraries.io dependency status for GitHub repo](https://img.shields.io/librariesio/github/statscore/rabbit-client-php)](https://libraries.io/github/statscore/rabbit-client-php)


## Table of Contents

* [Installation](#installation)
* [Example](#example)
* [Troubleshooting](#troubleshooting)

<a name="installation"></a>
## Installation

### Prerequisites

- PHP version >=7.4

### Hot to install package

Use [Composer](http://getcomposer.org) to install the latest version with command:

```bash
$ composer require statscore/rabbit-client-php
```

or add our package to your `composer.json` file.

```json
{
  "require": {
    "statscore/rabbit-client-php": "^1"
  }
}
```
## Example

### Check connection
```php
<?php
use Statscore\Client;

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client('localhost', 5672, 'guest', 'guest', 'test');
$client->run();
```


## Troubleshooting

Our support team, based in Katowice, exists for one purpose: to serve and delight STATSCORE customers. 

Have a question? Our team will help you find answers 24 hours a day, 365 days a year. Please send us an email at [tech-support@statscore.com](mailto:tech-support@statscore.com)

Issues are tracked on [GitHub](https://github.com/statscore/rabbit-client-php/issues)