<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RicoGoh\Hello;
use RicoGoh\Greetings;

$hello = new Hello();

echo $hello->say("Hello World");
echo Greetings::say("Hello World");

echo RicoGoh\Greetings::say("Bye");