<?php

namespace App\models;

use App\contracts\SizeInterface;
use App\contracts\SizeEnum;
use App\exceptions\ExceptionParameter;


class SizeClass implements SizeInterface{

    public static function getConvert($value,SizeEnum $convert){
            return $value*$convert->value;
    }
}

