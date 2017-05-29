<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ricogoh\Hello;
use ricogoh\Greetings;

$hello = new Hello();

echo $hello->say("Hello World");
echo Greetings::say("Hello World");