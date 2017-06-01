<?php

namespace RicoGoh;

use PHP_Timer;

class Greetings
{
    public static function say($toSay = 'Nothing given')
    {
        $timer = new PHP_Timer();
        $timer->start();

        return $toSay.' '.$timer->resourceUsage()."\n";
    }
}
