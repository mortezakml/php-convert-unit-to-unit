<?php

namespace App\contracts;
use App\contracts\SpeedEnum;

interface SpeedInterface{
    public static function getConvert($value,SpeedEnum $convert);
}