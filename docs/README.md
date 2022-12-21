# PHP client for Pappers's API

PHP library to communicate with [Pappers](https://www.pappers.fr)'s API.

This SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp)
from the [Pappers OpenAPI specification](https://www.pappers.fr/api/documentation).

## Installation

This library is built atop of [PSR-7](https://www.php-fig.org/psr/psr-7/) and
[PSR-18](https://www.php-fig.org/psr/psr-18/). So you will need to install some
implementations for those standard interfaces.

If no PSR-18 client or PSR-7 message factory is available yet in your project
or you don't know or don't care which one to use, just install some default:

```bash
composer require symfony/http-client nyholm/psr7
```

You can now install the  client:

```bash
composer require qdequippe/pappers-php-api
```

## Usage

```php
$client = new \Qdequippe\Pappers\Api\Client();

$client->recherche(['api_token' => 'YOUR_TOKEN', 'q' => 'Google']);
```

## Thanks

💙 [JoliCode PHP Slack Client](https://github.com/jolicode/slack-php-api)
