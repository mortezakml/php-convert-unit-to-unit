<?php

namespace App\models;

use App\contracts\SpeedInterface;
use App\contracts\SpeedEnum;

class SpeedClass implements SpeedInterface{

    public static function getConvert($value,SpeedEnum $convert){
        return $value*$convert->value;
    }
}

