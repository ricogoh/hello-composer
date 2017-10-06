# hello-composer

## Basic Hello World with composer

### Initialize package
```
composer init
```
This will run you through a bunch of questions: name, description, license, etc.

## Write some code
Start coding by creating the file src/Hello.php.
```php
<?php

namespace RicoGoh;

class Hello
{
    public function say($toSay = 'Nothing given')
    {
        return $toSay;
    }
}
```

### Edit composer.json
```json
{
    "name": "ricogoh/hello-composer",
    "description": "Hello composer",
    "license": "MIT",
    "authors": [{
        "name": "Rico Goh",
        "email": "rico@example.com"
    }],
    "minimum-stability": "dev",
    "autoload": {
        "psr-4": {
            "RicoGoh\\": "src/"
        }
    },
    "require": {
        "php": "^5.3.3 || ^7.0",
        "phpunit/php-timer": "^1.0@dev"
    },
    "scripts": {
        "php-fixer": [
            "php-cs-fixer fix --config=.php_cs --verbose"
        ]
    }
}
```

## Install dependencies
```
composer install
```

## Lets use it
Create a tests/test.php to it with the following contents.
```php
<?php

require_once __DIR__.'/../vendor/autoload.php';

use RicoGoh\Hello;

$hello = new Hello();

echo $hello->say('Hello World');
```

