<?php

namespace App\contracts;
use App\contracts\SizeEnum;

interface SizeInterface{
    public static function getConvert($value,SizeEnum $convert);
}