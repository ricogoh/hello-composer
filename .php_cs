<?php
/**
    * PHP Coding Standards Fixer setting for Laravel 5 on FriendsOfPHP/PHP-CS-Fixer 2.*
    * Rules with psr1, psr2, phpdoc and some symfony rules.
    * Rules only apply directory and sub-directory inside "app".
    *
    * Save script to .php_cs and place .php_cs file in the root of your Laravel project
    *
    * Requirement:
    * composer require friendsofphp/php-cs-fixer@2.* --dev
    * OR
    * composer global require friendsofphp/php-cs-fixer
    *
    * Run with command:
    * ./vendor/bin/php-cs-fixer fix --config=.php_cs --verbose
    * ./vendor/bin/php-cs-fixer fix --config=.php_cs --verbose /path/to/your/file_or_dir
    *
    * With composer:
    * Add below lines to composer.json
    * "scripts": {
    *      "php-fixer": [
    *         "php-cs-fixer fix --config=.php_cs --verbose"
    *     ]
    * }
    *
    * then run
    * composer run php-fixer
    */
    $fixers = [
        '@Symfony' => true,
        '@PSR1' => true,
        '@PSR2' => true,
    ];

    $finder = PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__);

    return PhpCsFixer\Config::create()
        ->setRules($fixers)
        ->setUsingCache(false)
        ->setFinder($finder);
