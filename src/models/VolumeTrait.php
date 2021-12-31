<?php

namespace App\models;

trait VolumeTrait{
    
    public static function getConvert($value,VolumeEnum $convert){
        return $value*$convert->value;
    }
}

