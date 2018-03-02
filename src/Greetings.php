<?php

namespace RicoGoh;

use SebastianBergmann\Timer\Timer;

class Greetings
{
    public static function say($toSay = 'Nothing given')
    {
        $timer = new Timer();
        $timer->start();

        return $toSay.' '.$timer->resourceUsage()."\n";
    }
}
